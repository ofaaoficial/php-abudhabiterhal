<?php require_once 'includes/header-admin.php'; ?>
<?php require_once 'includes/database.php'; ?>
<?php $places = DB::select('places'); ?>
<section class="container">
    <h1 class="title admin-title">Manage Places</h1>
    <table>
        <thead>
        <td>ID</td>
        <td>Title</td>
        <td width="300px">Action</td>
        </thead>
        <tbody>
        <?php foreach($places as $place): ?>
            <tr>
                <td><?= $place->id ?></td>
                <td><?= $place->title ?></td>
                <td class="btn-100 row nowrap j-around">
                    <a href="http://localhost/abudhabiterhal/places-edit.php?id=<?= $place->id; ?>">
                        <button class="btn-green w-100 my-20">Edit</button>
                    </a>
                    <a href="http://localhost/abudhabiterhal/places-delete.php?id=<?= $place->id; ?>">
                        <button class="btn-red w-100 my-20">Delete</button>
                    </a>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</section>



<?php require_once 'includes/footer.php'; ?>
