{include file="templates/header.tpl" }

<form>

<ul class="list-group">
    {foreach from=$lighters item=$lighter}
        <li>
            <span> <a href=showItem/{$lighter->id}><b>{$lighter->producto}</b> - Precio: ${$lighter->precio} </a></span>
        </li>
    {/foreach}
</ul>

<aside>
<ul>
    {foreach from=$categories item=$category}
        <li>
            {$category->descripcion_tipo} 
        </li>
    {/foreach}
</ul>
</aside>

{include file="templates/footer.tpl"}