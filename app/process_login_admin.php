<?php
session_start();

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    include ("connect.php");

    $query = "SELECT * FROM data WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user_data = $result->fetch_assoc();

        if ($password === $user_data['password']) {
            if (isset($_POST['remember_me'])) {
                setcookie('username', $username, time() + (30 * 24 * 60 * 60));
                setcookie('password', $password, time() + (30 * 24 * 60 * 60));
            }
            $_SESSION["user_id"] = $user_data['user_id'];
            $_SESSION["login"] = true;

            header("Location: after.php");
            exit();
        } else {
            echo "<script> alert('Invalid Username or Password'); window.location.href = 'login.php';</script>";
        }
    } else {
        echo "<script> alert('Invalid Username or Password'); window.location.href = 'login.php';</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Error connecting to the database.";
}

$username_cookie = '';
$password_cookie = '';
$set_remember = '';

if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    $username_cookie = $_COOKIE['username'];
    $password_cookie = $_COOKIE['password'];
    $set_remember = "checked = 'checked'";
}
?>
