<?php session_start(); if(isset($_SESSION['USER'])) header('location: places-index.php'); ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="ofaaoficial">
    <title>Abudhabiterhal</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
<header class="top-header">
    <p>REMEMBERING SHEIKH ZAYED</p>
    <img src="imgs/logo.png" alt="icon zayed">
    <p>THE MAN WHO BUILT THE UAE</p>
</header>
<header class="bg-navbar">
    <nav class="navbar">
        <a href="#" class="navbar-brand">AbuDhabi<span>Terhal</span></a>
        <ul class="navbar-menu ml-auto">
            <li class="navbar-item"><a qhref="index.php">Home</a></li>
            <li class="navbar-item"><a <?= isset($attractions) ? 'class="active"': null ?>href="attractions.php">Attractions</a></li>
            <li class="navbar-item"><a <?= isset($gallery) ? 'class="active"': null ?> href="gallery.php">Gallery</a></li>
            <li class="navbar-item"><a <?= isset($aboutUs) ? 'class="active"': null ?> href="about-us.php">About Us</a></li>
            <li class="navbar-item"><a <?= isset($contact) ? 'class="active"': null ?> href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <section class="banner admin-login">
        <article class="search-panel">
            <section class="form-group">
                <div class="search-title">Admin login</div>
                <form method="POST" id="form-login" class="form-login">
                    <input type="text" name="username" id="username" placeholder="Username" class="input-control">
                    <input type="password" name="password" id="password" placeholder="Password" class="input-control">
                    <button class="btn-green">SEARCH</button>
                </form>
            </section>
        </article>
    </section>
</header>

<?php require_once 'includes/footer.php' ?>