{include file="./header.tpl" }

<form action='addItem' method="POST">
    <div>
        <label class="form-label">Producto</label>
        <input type="Text" class="form-control" name="product">
    </div>
    <div>
    <label class="form-label">Tipo</label>
    <select name="type">
        {foreach from=$categories item=$category}
            <option value= {$category->id_tipo}>
                {$category->descripcion_tipo}
            </option>
        {/foreach}
    </select>
</div>
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
    <button type="submit" class="btn">Submit</button>
</form>

{include file="./footer.tpl"}