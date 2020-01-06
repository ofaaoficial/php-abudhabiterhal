<?php session_start(); if(! isset($_SESSION['USER'])) header('location: admin-login-page.php'); ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="ofaaoficial">
    <title>Abudhabiterhal | Admin</title>
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
            <li class="navbar-item"><a <?= isset($home) ? 'class="active"': null ?> href="index.php">Home</a></li>
            <li class="navbar-item"><a <?= isset($attractions) ? 'class="active"': null ?>href="attractions.php">Attractions</a></li>
            <li class="navbar-item"><a <?= isset($gallery) ? 'class="active"': null ?> href="gallery.php">Gallery</a></li>
            <li class="navbar-item"><a <?= isset($aboutUs) ? 'class="active"': null ?> href="about-us.php">About Us</a></li>
            <li class="navbar-item"><a <?= isset($contact) ? 'class="active"': null ?> href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <style>
        .btn-admin{
            width: 100%;
            margin-left: 10px;
            margin-right: 10px;
        }

        .nowrap{
            flex-wrap: nowrap;
        }
    </style>
    <section class="banner">
        <article class="search-panel">
            <section class="form-group row nowrap">
                <div class="search-title">Hello <?= $_SESSION['USER']->username; ?></div>
                <a href="places-create.php" class="btn-green btn-admin">ADD PLACE</a>
                <a href="places-index.php" class="btn-green btn-admin">MANAGE PLACES</a>
                <a href="api.php?logout=true" class="btn-red btn-admin">LOGOUT</a>
            </section>
        </article>
    </section>
</header>