<?php require_once 'includes/header-admin.php'; ?>
<?php require_once 'includes/database.php'; ?>
    <?php DB::delete('places', $_GET['id']); ?>
<?php require_once 'includes/footer.php'; ?>


