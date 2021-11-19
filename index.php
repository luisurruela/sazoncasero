<?php 
require_once('views/layouts/header.php'); 
require_once('config/db.php');
require_once('includes/functions.php');
$platillos = get_active_posts($conn, 'specials');
$guarniciones = get_active_posts($conn, 'sides');
$bebidas = get_active_posts($conn, 'drinks');
$postres = get_active_posts($conn, 'deserts');
?>

<section id="menu-dia" class="mb-5 text-center">
    <img src="assets/img/chef-sazon-casero.png" alt="Sazón Casero | Una delicia para tu paladar" width="200">
    <h2 class="lead text-center mb-4" style="font-size: 32px;">El menú de hoy</h2>
    <div class="container">
        <div class="row">
            <?php if(count($platillos) > 0) : ?>
            <?php while($platillo = $platillos->fetch_array() ) : ?>
            <div class="col-lg-4 mb-4 ml-lg-0 mr-lg-0 ml-4 mr-4">
                <div class="card shadow-sm h-100">
                    <div class="card-content">
                        <img src="uploads/specials-cropped/<?=$platillo['image']?>" class="img-fluid" width="100%">
                        <div id="desc" class="p-3">
                            <h4><?=$platillo['title']?></h4>
                            <p class="text-secondary"><?=$platillo['description']?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile ?>
            <?php else: ?>
            <div class="col-12">
                <h5 class="text-center text-muted">Un nuevo menú será publicado en breve, vuelve pronto.</h5>
            </div>
            <?php endif ?>
        </div>
    </div>
</section>

<?php if(count($guarniciones) > 0) : ?>
<section id="guarniciones" class="mb-0 bg-beige pt-5 pb-5 text-center">
    <h2 class="lead text-center mb-0" style="font-size: 32px;">Guarniciones</h2>
    <p class="text-center mb-5">Elige 2 para acompañar tu platillo</p>
    <div class="container">
        <div class="row">
            
            <?php foreach ($guarniciones as $guarnicion) : ?>
            <div class="col-lg-4 mb-4 ml-lg-0 mr-lg-0 ml-4 mr-4">
                <div class="card shadow-sm h-100">
                    <div class="card-content">
                        <img src="uploads/sides-cropped/<?=$guarnicion['image']?>" class="img-fluid" width="100%">
                        <div id="desc" class="p-3">
                            <h4><?=$guarnicion['title']?></h4>
                            <p class="text-secondary"><?=$guarnicion['description']?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
            
        </div>
    </div>
</section>
<?php endif ?>

<?php if(count($postres) > 0) : ?>
<section id="postres" class="mb-0 pt-5 pb-5 text-center">
    <h2 class="lead text-center mb-0" style="font-size: 32px;">Postres</h2>
    <div class="container mt-5">
        <div class="row">
            
            <?php foreach ($postres as $postre) : ?>
            <div class="col-lg-4 mb-4 ml-lg-0 mr-lg-0 ml-4 mr-4">
                <div class="card shadow-sm h-100">
                    <div class="card-content">
                        <img src="uploads/deserts-cropped/<?=$postre['image']?>" class="img-fluid" width="100%">
                        <div id="desc" class="p-3">
                            <h4><?=$postre['title']?></h4>
                            <p class="text-secondary"><?=$postre['description']?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
            
        </div>
    </div>
</section>
<?php endif ?>

<?php if(count($bebidas) > 0) : ?>
<section id="bebidas" class="mb-0 bg-beige pt-5 pb-5 text-center">
    <h2 class="lead text-center mb-0" style="font-size: 32px;">Bebidas del día</h2>
    <div class="container mt-5">
        <div class="row">
            
            <?php foreach ($bebidas as $bebida) : ?>
            <div class="col-lg-4 mb-4 ml-lg-0 mr-lg-0 ml-4 mr-4">
                <div class="card shadow-sm h-100">
                    <div class="card-content">
                        <img src="uploads/drinks-cropped/<?=$bebida['image']?>" class="img-fluid" width="100%">
                        <div id="desc" class="p-3">
                            <h4><?=$bebida['title']?></h4>
                            <p class="text-secondary"><?=$bebida['description']?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<?php endif ?>

<?php require_once('views/layouts/footer.php'); ?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Aparta tu rosca</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <a href="navidad.php"><img src="assets/img/rosca_de_reyes_villahermosa.jpeg" alt="Aviso" class="img-fluid"></a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>