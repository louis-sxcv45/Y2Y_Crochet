<?php
session_start();

include('connect.php');

if (isset($_POST['submit'])) {
    $user_id = $_POST['user_id'];
    $name = $_POST['nama'];
    $user = $_POST['username'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $pass = $_POST['password'];

    $updatequery = "UPDATE data SET nama = '$name', username = '$user', email = '$email', alamat = '$alamat', 
        no_hp = '$no_hp', password = '$pass' WHERE user_id = '$user_id'";

    if ($conn->query($updatequery) === TRUE) {
        echo "Data berhasil diupdate.";
        header("location: edit_account.php");
    } else {
        echo "Error: " . $updateQuery . "<br>" . $conn->error;
    }
} else {
    echo "Form submission error.";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edit_account.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="js/login_regis.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
</head>

<body>
    <div class="header">
        <div class="side-nav">
            <a href="after.php" class="logo">
                <img src="logo.jpg" alt="img" class="logo-img">
            </a>
            <ul class="nav-links">
                <li class="active"><a href="edit_account.php"><span class="material-symbols-outlined">
                            person
                        </span>
                        <p>Account</p>
                    </a></li>
                <?php
                if (isset($_SESSION['user_id'])) {
                    $user_id = $_SESSION['user_id'];
                    $query = "SELECT * FROM data WHERE user_id = '$user_id'";

                    $result = $conn->query($query);
                }
                ?>
                <?php
                if ($result->num_rows > 0) {
                    while ($account = $result->fetch_assoc()) {
                ?>
                        <li><a href="delete.php?user_id=<?php echo $account['user_id']; ?>"><span class="material-symbols-outlined">
                                    delete
                                </span>
                                <p>Delete Account</p>
                            </a></li>
                <?php
                    }
                }
                ?>
            </ul>

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
            </div>
        </div>
        <div class="edit-account-section">
            <?php
            if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];
                $query = "SELECT * FROM data WHERE user_id = '$user_id'";

                $result = $conn->query($query);
            }

            ?>
            <h1>Edit Account</h1>
            <?php
            if ($result->num_rows > 0) {
                while ($account = $result->fetch_assoc()) {
            ?>
                    <form class="edit-account-form" action="" method="POST">
                        <input type="hidden" name="user_id" value="<?php echo $account['user_id']; ?>">
                        <label for="nama">Nama:</label>
                        <input type="text" id="username" name="nama" value="<?php echo $account['nama']; ?>" required>

                        <label for="username">Username:</label>
                        <input type="text" id="user" name="username" value="<?php echo $account['username']; ?>" required>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="<?php echo $account['email']; ?>" required>

                        <label for="alamat">Alamat:</label>
                        <input type="text" id="alamat" name="alamat" value="<?php echo $account['alamat']; ?>" required>

                        <label for="no_hp">No hp:</label>
                        <input type="text" id="no_hp" name="no_hp" value="<?php echo $account['no_hp']; ?>" required>

                        <div class="txt_box">
                            <label for="password">Password:</label>
                            <div class="password-input">
                                <input type="password" id="password" name="password" value="<?php echo $account['password']; ?>" required>
                                <img src="images/eye_close.png" id="eyeicon" onclick="myFunction()">
                            </div>
                        </div>

                <?php
                }
            }
                ?>


                <button type="submit" name="submit">Submit</button>
                    </form>

        </div>
    </div>
</body>

</html>