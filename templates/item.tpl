{include file="./header.tpl" }

<div>
    <img src="{$lighter->img_url}" alt="{$lighter->producto}">
</div>

<aside>
    <div>
        <h3>{$lighter->producto}</h3>
    </div>

    <span> {$lighter->precio}</span>
    <span> Tipo: {$lighter->descripcion_tipo}</span>
    <span> Recargable con: {$lighter->tipo_gas}</span>
    <p> {$lighter->descripcion} </p>

</aside> 

{include file="./footer.tpl" }