<?php 
session_start();
require_once('config/db.php');
require_once('includes/functions.php');
$post = get_post($conn, $_GET['id'], $_GET['type']);
require_once('views/dashboard/header.php'); ?>

<?php if(isset($_SESSION['response'])) : ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Excelente!</strong> <?=$_SESSION['response']['message']?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
<?php unset($_SESSION['response']); endif ?>

<div class="card col-lg-8 offset-lg-2">
    <div class="card-content p-3 pt-5 pb-5 pr-5">
        <form method="post" action="includes/edit.php" enctype="multipart/form-data">
            <?php require_once('views/posts/form.php') ?>
            <button class="btn btn-primary pl-5 pr-5 float-right" type="submit" name="edit">Guardar cambios</button>
        </form>
    </div>
</div>

<?php require_once('views/dashboard/footer.php'); ?>