{include file="./header.tpl"}

<aside>
    <div>
        <h3>{$lighter->producto}</h3>
    </div>

    <span> ${$lighter->precio}</span>
    <span> Tipo: {$lighter->descripcion_tipo}</span>
    <span> Recargable con: {$lighter->tipo_gas}</span>
    <p> {$lighter->descripcion} </p>

</aside> 
<div>
    <img src="{$lighter->img_url}" alt="{$lighter->producto}">
</div>


{include file="./footer.tpl" }