{include file="./header.tpl"}
<div class="itemView">
<div class="listaItems">
    <h3>Lista de items</h3>
<ul>
    {foreach from=$lighters item=$lighter}
        <li>
            <span> <a href=showItem/{$lighter->id}><b>{$lighter->producto}</b> - Precio: ${$lighter->precio} </a></span>
        </li>
    {/foreach}
</ul>
</div>
<aside>
    <div>
        <h3>{$lighter->producto}</h3>
    </div>

    <p> ${$lighter->precio}</span>
    <p> Tipo: {$lighter->descripcion_tipo}</p>
    <p> Recargable con: {$lighter->tipo_gas}</p>
    <p> {$lighter->descripcion} </p>

</aside> 
<div class="imgContainer">
    <img class="img_item"src="{$lighter->img_url}" alt="{$lighter->producto}">
</div>
</div>
{include file="./footer.tpl" }