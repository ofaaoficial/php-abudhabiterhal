<?php require_once 'includes/header-admin.php'; ?>
<section class="container">
    <h1 class="title admin-title">Create Places</h1>
    <form method="POST" id="edit-place" enctype="multipart/form-data" action="api.php?createPlace=true" class="form-login form-edit">
        <input type="text" class="input-control" placeholder="title" name="title" required>
        <textarea class="input-control" name="description" id="description" cols="30" rows="10" placeholder="description" required></textarea>
        <input class="input-control" type="file" name="picture">
        <div class="row center j-around">
            <button class="btn-green">CREATE</button>
            <a href="places-index.php" class="btn-green">CANCEL</a>
        </div>
    </form>
</section>
<?php require_once 'includes/footer.php'; ?>