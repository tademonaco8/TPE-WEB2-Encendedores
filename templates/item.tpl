{include file="./header.tpl"}

<aside>
    <div>
        <h3>{$lighter->producto}</h3>
    </div>

    <p> ${$lighter->precio}</sppan>
    <p> Tipo: {$lighter->descripcion_tipo}</p>
    <p> Recargable con: {$lighter->tipo_gas}</p>
    <p> {$lighter->descripcion} </p>

</aside> 
<div>
    <img class="img_item"src="{$lighter->img_url}" alt="{$lighter->producto}">
</div>


{include file="./footer.tpl" }