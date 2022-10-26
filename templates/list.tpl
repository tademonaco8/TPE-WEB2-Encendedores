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
            <h4>Categorias:</h4>
            {foreach from=$categories item=$category}
                <li class="category">
                    <a href="category/{$category->descripcion_tipo}">{$category->descripcion_tipo} </a>
                </li>
            {/foreach}
        </ul>
    </aside>

{include file="templates/footer.tpl"}