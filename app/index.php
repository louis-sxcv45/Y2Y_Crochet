<?php
session_start();
include('connect.php');
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
                <h1><a href=""><span>Y2Y</span> Crochet</a></h1>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#order_now">Order Now</a></li>
                        <li><a href="login.php">Login</a></li>
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