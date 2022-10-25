{include file="templates/header.tpl" }
{if !isset($smarty.session.IS_LOGGED)}
<h1 class="h1admin">Ingrese para acceder a esta informacion</h1>
{else}
<a href="add"><button>Agregar item</button></a>

<ul class="list-group">
    {foreach from=$lighters item=$lighter}
    <li>
        <span> <a href=showItem/{$lighter->id}><b>{$lighter->producto}</b> - Precio: ${$lighter->precio} </a> <a href="edit/{$lighter->id}"><button>Editar</button></a> <a href="delete/{$lighter->id}"><button>Borrar</button></a></span>
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
{/if}
{include file="templates/footer.tpl"}