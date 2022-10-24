<?php
/* Smarty version 4.2.1, created on 2022-10-24 19:00:44
  from 'C:\xampp3\htdocs\proyectos\TPE\templates\item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6356c4bc7765f7_99876997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e49a46514fc771bcc915379589f9ac89bcfcab76' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\proyectos\\TPE\\templates\\item.tpl',
      1 => 1666630843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_6356c4bc7765f7_99876997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<aside>
    <div>
        <h3><?php echo $_smarty_tpl->tpl_vars['lighter']->value->producto;?>
</h3>
    </div>

    <p> $<?php echo $_smarty_tpl->tpl_vars['lighter']->value->precio;?>
</sppan>
    <p> Tipo: <?php echo $_smarty_tpl->tpl_vars['lighter']->value->descripcion_tipo;?>
</p>
    <p> Recargable con: <?php echo $_smarty_tpl->tpl_vars['lighter']->value->tipo_gas;?>
</p>
    <p> <?php echo $_smarty_tpl->tpl_vars['lighter']->value->descripcion;?>
 </p>

</aside> 
<div>
    <img class="img_item"src="<?php echo $_smarty_tpl->tpl_vars['lighter']->value->img_url;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lighter']->value->producto;?>
">
</div>
<div>
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

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
