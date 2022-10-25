{include file="./header.tpl" }

<form action='addItem' method="POST">
    <div>
        <label class="form-label">Producto</label>
        <input type="Text" class="form-control" name="product">
    </div>
    <div>
        <label class="form-label">Tipo</label>
        <input type="Text" class="form-control" name="type">
    </div>
    <div>
        <label class="form-label">Descripcion</label>
        <input type="Text" class="form-control" name="description">
    </div>
    <div>
        <label class="form-label">Precio</label>
        <input type="Text" class="form-control" name="price">
    </div>
    <div>
        <label class="form-label">URL de la imagen</label>
        <input type="Text" class="form-control" name="imgUrl">
    </div>
    <button type="submit" class="btn" >Submit</button>
</form>

{include file="./footer.tpl"}