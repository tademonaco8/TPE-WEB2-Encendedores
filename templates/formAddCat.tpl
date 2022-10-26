{include file="./header.tpl" }

<form action='addCatToDB' method="POST">
    <div>
        <label class="form-label">Descripcion del tipo</label>
        <input type="Text" class="form-control" name="description">
    </div>
    <div>
        <label class="form-label">Tipo de Gas:</label>
        <input type="Text" class="form-control" name="type">
    </div>
    <button type="submit" class="btn">Submit</button>
</form>

{include file="./footer.tpl"}