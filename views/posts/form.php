<div class="form-group">
    <div class="row">
    <label for="title" class="col-4 text-right pt-2 small text-muted">Nombre del platillo</label>
    <input id="title" class="form-control col-8" type="text" name="title" value="<?=isset($post) ? $post['title'] : '' ?>" required>
    </div>
</div>
<div class="form-group">
    <div class="row">
    <label for="image" class="col-4 text-right pt-2 small text-muted">Imagen</label>
    <input id="image" class="form-control col-8" type="file" name="image">
    </div>
</div>
<div class="form-group">
    <div class="row">
    <label for="desc" class="col-4 text-right pt-2 small text-muted">Descripción</label>
    <textarea id="desc" class="form-control col-8" name="desc" rows="3" required><?=isset($post) ? $post['description'] : '' ?></textarea>
    </div>
</div>
<input type="hidden" name="id" value="<?=$_GET['id']?>">
<input type="hidden" name="type" value="<?=$_GET['type']?>">