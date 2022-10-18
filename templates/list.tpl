{include file="templates/header.tpl" }

<form>

<ul class="list-group">
    {foreach from=$lighters item=$lighter}
        <li>
            <span> <a href=item/{$lighter->id}><b>{$lighter->producto}</b> - Precio: ${$lighter->precio} </span>
            <div>

            </div>
        </li>
    {/foreach}
</ul>

{include file="templates/footer.tpl"}