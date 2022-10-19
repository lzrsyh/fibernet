<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.9, user-scalable=no">
    <title>Fibernet</title>

    <link rel="stylesheet" href="./assets/css/style.css">
    <script defer src="./assets/js/app.js"></script>
</head>

<body>
    <div id="home" class="content-container">
        <header id="header" class="header">
            <a href="index.php#home"><img loading="lazy" src="./assets/img/logo.png" alt="Fibernet-website-logo"
                    class="header-logo"></a>
            <nav class="header-nav">
                <ul>
                    <li class="row">
                        <a href="index.php#home"><img loading="lazy" src="./assets/img/logo.png" alt="Fibernet-website-logo"
                                class="header-logo">
                        </a>
                        <div class="close">
                            <div class="close-line"></div>
                        </div>
                    </li>
                    <li><a href="index.php#home" class="nav-link" onclick="home()">home</a></li>
                    <li><a href="index.php#service" class="nav-link" onclick="services()">services</a></li>
                    <li><a href="index.php#benefit" class="nav-link" onclick="benefit()">benefits</a></li>
                    <li><a href="index.php#product" class="nav-link" onclick="package()">packages</a></li>
                    <li><a href="index.php#footer" class="nav-link" onclick="contact()">contact</a></li>
                </ul>
            </nav>
            <div class="hamburger">
                <div class="hamburger-line"></div>
            </div>
        </header>
