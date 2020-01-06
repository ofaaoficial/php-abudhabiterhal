<?php $home = true; require_once 'includes/header.php'; ?>
<?php require_once 'includes/database.php'; ?>
<?php $places = DB::select('places', 6); ?>
<section class="home">
    <article class="container">
        <h4 class="sub-title">TOP 6 ABU DHABI TOURIST ATTRACTIONS</h4>
        <h1 class="title">Explore and be Inspired</h1>
        <article class="panels">
            <?php foreach ($places as $place) : ?>
            <section class="panel">
                <img src="<?= $place->picture; ?>" alt="<?= $place->title; ?>" class="panel-img">
                <article class="panel-body">
                    <a href="http://localhost/abudhabiterhal/place.php?id=<?= $place->id; ?>">
                    <h2 class="panel-title"><?= $place->title; ?></h2>
                    </a>
                    <p class="panel-description"><?= substr($place->description, 0, 120). '.....'; ?></p>
                </article>
            </section>
            <?php endforeach; ?>
        </article>

        <article class="center">
                <a class="btn-green" href="attractions.php">VIEW ALL ATTRACTIONS</a>
        </article>
    </article>
</section>


<?php require_once 'includes/footer.php' ?>

