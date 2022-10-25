<?php
/* Smarty version 4.2.1, created on 2022-10-26 00:21:43
  from 'C:\xampp3\htdocs\proyectos\TPE\templates\item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_635861774d0b83_01905180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e49a46514fc771bcc915379589f9ac89bcfcab76' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\proyectos\\TPE\\templates\\item.tpl',
      1 => 1666736289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_635861774d0b83_01905180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="itemView">
<div class="listaItems">
    <h3>Lista de items</h3>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lighters']->value, 'lighter');
$_smarty_tpl->tpl_vars['lighter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lighter']->value) {
$_smarty_tpl->tpl_vars['lighter']->do_else = false;
?>
        <li>
            <span> <a href=showItem/<?php echo $_smarty_tpl->tpl_vars['lighter']->value->id;?>
><b><?php echo $_smarty_tpl->tpl_vars['lighter']->value->producto;?>
</b> - Precio: $<?php echo $_smarty_tpl->tpl_vars['lighter']->value->precio;?>
 </a></span>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</div>
<aside>
    <div>
        <h3><?php echo $_smarty_tpl->tpl_vars['lighter']->value->producto;?>
</h3>
    </div>

    <p> $<?php echo $_smarty_tpl->tpl_vars['lighter']->value->precio;?>
</span>
    <p> Tipo: <?php echo $_smarty_tpl->tpl_vars['lighter']->value->descripcion_tipo;?>
</p>
    <p> Recargable con: <?php echo $_smarty_tpl->tpl_vars['lighter']->value->tipo_gas;?>
</p>
    <p> <?php echo $_smarty_tpl->tpl_vars['lighter']->value->descripcion;?>
 </p>

</aside> 
<div class="imgContainer">
    <img class="img_item"src="<?php echo $_smarty_tpl->tpl_vars['lighter']->value->img_url;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lighter']->value->producto;?>
">
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
