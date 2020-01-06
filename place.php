<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/database.php'; ?>
<?php $place = DB::find(['places', $_GET['id']]); ?>
<?php if($place) : ?>
<section class="place">
    <article class="container">
        <h1 class="title"><?= $place->title; ?></h1>
        <section class="panel">
            <img src="<?= $place->picture; ?>" alt="<?= $place->title; ?>" class="panel-img">
            <article class="panel-body">
                <p class="panel-description"><?= $place->description; ?></p>
            </article>
        </section>
    </article>
</section>
<?php endif; ?>

<?php require_once 'includes/footer.php' ?>
