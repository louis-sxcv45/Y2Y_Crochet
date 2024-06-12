<?php
if (isset($_POST['sign-up'])) {
    $name = $_POST["nama"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $nohp = $_POST["no_hp"];
    $user = $_POST["username"];
    $password = $_POST["password"];

    include("connect.php");

    $query = "INSERT INTO data (nama, email, alamat, no_hp, username, password)
        VALUES ('$name', '$email', '$alamat', '$nohp', '$user', '$password')";

    $stmt = $conn->prepare($query);

    if (!$stmt) {
        die("Error: " . $conn->error);
    }


    // Execute the prepared statement
    if ($stmt->execute()) {
        session_start();
        $_SESSION['user_id'] = $conn->insert_id;
        $_SESSION['username'] = $user;
        echo "<script> alert('Registration Successful'); window.location.href = 'login.php';</script>";
    } else {
        echo "<script> alert('Registration Failed'); window.location.href = 'register.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
