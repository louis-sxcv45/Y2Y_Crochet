<?php 
    session_start();

    include("connect.php");

    if (isset($_GET['user_id'])){
        $user_id = $_GET['user_id'];
        mysqli_query($conn, "DELETE FROM data WHERE user_id = '$user_id'");

        header ("location:index.php");
        exit();
    }

?>