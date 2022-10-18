{include file="./header.tpl" }

<form action='edit/{$id}' method="POST">
    <div>
        <label class="form-label">Producto</label>
        <input type="Text" class="form-control" name="producto">
    </div>
    <div>
        <label class="form-label">Tipo</label>
        <input type="Text" class="form-control" name="tipo_FK">
    </div>
    <div>
        <label class="form-label">Descripcion</label>
        <input type="Text" class="form-control" name="descripcion">
    </div>
    <div>
        <label class="form-label">Precio</label>
        <input type="Text" class="form-control" name="precio">
    </div>
    <div>
        <label class="form-label">URL de la imagen</label>
        <input type="Text" class="form-control" name="img_url">
    </div>
    <button type="submit" class="btn" >Submit</button>
</form>

{include file="./footer.tpl"}