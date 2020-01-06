<?php $gallery = true; require_once 'includes/header.php'; ?>
<?php require_once 'includes/database.php'; ?>
<?php $places = DB::select('places'); ?>
<section class="modal-dialog">
    <div class="modal">
        <a href="#" id="close">X</a>
        <img alt="imagen-preview" id="img-modal">
        <h1 id="title-modal">Title</h1>
    </div>
</section>
<section class="home gallery">
    <article class="container">
        <h4 class="sub-title">TOP 6 ABU DHABI TOURIST ATTRACTIONS</h4>
        <h1 class="title">Explore and be Inspired</h1>
        <article class="panels">
            <?php foreach ($places as $place) : ?>
                <section class="panel">
                    <img src="<?= $place->picture; ?>" alt="<?= $place->title; ?>" class="panel-img">
                </section>
            <?php endforeach; ?>
        </article>
    </article>
</section>
<?php require_once 'includes/footer.php' ?>


