{include file="templates/header.tpl" }
{if !isset($smarty.session.IS_LOGGED)}
<h1 class="h1admin">Ingrese para acceder a esta informacion</h1>
<div class="btnAdmin">
<a href="login"><button>Ir a Login</button></a>
{else}


<ul class="list-group">
<a href="add"><button>Agregar item</button></a>
    {foreach from=$lighters item=$lighter}
    <li>
        <span> <a href=showItem/{$lighter->id}><b>{$lighter->producto}</b> - Precio: ${$lighter->precio} </a> <a href="edit/{$lighter->id}"><button>Editar</button></a> <a href="delete/{$lighter->id}"><button>Borrar</button></a></span>
    </li>
    {/foreach}
</ul>

<aside>
    <ul>
        <h4>Categorias:</h4>
        <a href="addCat"><button>Agregar categoria</button></a>
        
        {foreach from=$categories item=$category}
        <li class="category">
            <span>
            <a href="category/{$category->id_tipo}">{$category->descripcion_tipo}</a> 
            <a href="showEditCat/{$category->id_tipo}"> <button>Editar</button></a> 
            <a href="deleteCat/{$category->id_tipo}"> <button>Borrar</button></a>
            </span>
        </li>
        {/foreach}
    </ul>
</aside>
{/if}
{include file="templates/footer.tpl"}