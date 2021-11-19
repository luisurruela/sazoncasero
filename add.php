<?php require_once('views/dashboard/header.php'); ?>

<div class="card col-lg-8 offset-lg-2">
    <div class="card-content p-3 pt-5 pb-5 pr-5">
        <form method="post" action="includes/add.php" enctype="multipart/form-data">
            <?php require_once('views/posts/form.php') ?>
            <button class="btn btn-primary pl-5 pr-5 float-right" type="submit" name="add">Añadir</button>
        </form>
    </div>
</div>

<?php require_once('views/dashboard/footer.php'); ?>