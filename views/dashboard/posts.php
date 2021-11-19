<?php
session_start();
require_once('config/db.php');
require_once('includes/functions.php');
$posts = getAllPosts($conn, $_GET['type']);
?>
<div class="container">
    <?php if(count($posts) > 0) : ?>
    <div class="card shadow-sm">
        <div class="card-content">        
            <table class="table table-striped">
                <thead class="bg-warning thead-warning">
                    <tr class="text-center">
                        <th>Imagen</th>
                        <th>Título</th>
                        <th>Activo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($posts as $post): ?>
                    <tr>
                        <td width="20%"><img src="uploads/<?=$_GET['type']?>-cropped/<?=$post['image']?>" class="img-thumbnail"></td>
                        <td width="60%" valign="middle" class="pt-3 pt-lg-5 text-left"><?=$post['title']?><br><span class="small"><?=$post['description']?></span></td>
                        <td class="pt-3 pt-lg-5 text-center">
                            <a href="includes/toggle.php?id=<?=$post['id']?>&type=<?=$_GET['type']?>" class="badge badge-<?=$post['status'] == 'off' ? 'success' : 'danger' ?>"><?=get_status_name($post['status'])?></a>
                        </td>
                        <td class="pt-3 pt-lg-5 text-center">
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-edit"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item small" href="edit.php?id=<?=$post['id']?>&type=<?=$_GET['type']?>">Editar</a>
                                <a class="dropdown-item text-danger small" href="includes/delete.php?id=<?=$post['id']?>&type=<?=$_GET['type']?>">Eliminar</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php else: ?>

    <div class="card shadow-sm">
        <div class="card-content p-5">        
            <p class="text-center">No hay publicaciones aún. <a href="add.php?type=<?=get_category($_GET['type'])?>">Agregar una</a></p>
        </div>
    </div>

    <?php endif ?>

    
</div>