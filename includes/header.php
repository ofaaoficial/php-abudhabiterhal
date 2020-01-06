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
            <li class="navbar-item"><a <?= isset($home) ? 'class="active"': null ?> href="index.php">Home</a></li>
            <li class="navbar-item"><a <?= isset($attractions) ? 'class="active"': null ?>href="attractions.php">Attractions</a></li>
            <li class="navbar-item"><a <?= isset($gallery) ? 'class="active"': null ?> href="gallery.php">Gallery</a></li>
            <li class="navbar-item"><a <?= isset($aboutUs) ? 'class="active"': null ?> href="about-us.php">About Us</a></li>
            <li class="navbar-item"><a <?= isset($contact) ? 'class="active"': null ?> href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <section class="banner">
        <h4 class="sub-title">LET US ENCOURAGE YOU TO VISIT THE CITY</h4>
        <h1 class="title">Welcome to Abu Dhabi</h1>
        <article class="search-panel">
            <section class="form-group">
                <div class="search-title">Search for a place</div>
                <form method="POST" id="search-form">
                    <input type="text" name="search" id="search" placeholder="Place name" class="input-control">
                    <button class="btn-green">SEARCH</button>
                </form>
            </section>
        </article>
    </section>
</header>