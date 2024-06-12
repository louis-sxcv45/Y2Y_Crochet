<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location:index.php");
    exit();
}
include('connect.php');

if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
    $query = "SELECT * FROM data WHERE user_id = $user_id";
    $result = $conn->query($query);

    if ($result) {
        $userDetails = $result->fetch_assoc();
    } else {
        echo "Error fetching user details: " . $conn->error;
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Y2Y Crochet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div class="wrapper">
            <div class="logo">
                <h1><a href="after.php"><span>Y2Y</span> Crochet</a></h1>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#order_now">Order Now</a></li>
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
                        echo '<li><a href="edit_account.php?user_id=' . $account['user_id'] . '"><span class="material-symbols-outlined">account_circle</span> ' . $userDetails['username'] . '</a></li>';
                    }
                }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Header -->
    <!-- Hero -->
    <div class="hero" id="about">
        <div class="wrapper">
            <div class="hero-text">
                <h2>Kreativitas Rajutan yang Terjalin dalam Setiap Kaitan</h2>
                <p>Di Y2Y Crochet, kami menghargai detail dan keindahan dalam setiap kaitan benang. Setiap produk kami bukan hanya sekadar barang, melainkan hasil dari dedikasi kami untuk menyajikan keindahan rajutan yang memenuhi standar kualitas tertinggi. </p>
                <a href="https://wa.me/6281315855569">Yuk Beli Sekarang</a>

            </div>
            <div class="hero-image">
                <img src="images/gambar.jpg" alt=""">
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    <!-- Catalog -->
    <div class=" catalog" id="order_now">
                <div class="wrapper">
                    <h3> Our Product</h3>
                </div>
                <div class="wrapper">
                    <div class="catalog-item">
                        <img src="images/boots.jpg" alt="">
                        <div class="desc">
                            <div class="title">
                                <h5>Sepatu Boots</h5>
                            </div>
                            <div class="price">
                                Rp. 1.500.000
                            </div>
                        </div>

                    </div>
                    <div class="catalog-item">
                        <img src="images/sendal.jpg" alt="">
                        <div class="desc">
                            <div class="title">
                                <h5>High Heels</h5>
                            </div>
                            <div class="price">
                                Rp. 1.000.000
                            </div>
                        </div>

                    </div>
                    <div class="catalog-item">
                        <img src="images/pantofel.jpg" alt="">
                        <div class="desc">
                            <div class="title">
                                <h5>Pantofel</h5>
                            </div>
                            <div class="price">
                                Rp. 500.000
                            </div>
                        </div>

                    </div>
                    <div class="catalog-item">
                        <img src="images/sendall.jpg" alt="">
                        <div class="desc">
                            <div class="title">
                                <h5>Sendal</h5>
                            </div>
                            <div class="price">
                                Rp. 500.000
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="wrapper">
                    <p>Y2Y Crochet &copy; 2020. All Right Reserved</p>
                </div>
            </div>
            <script src="js/scripts.js"></script>
</body>

</html>