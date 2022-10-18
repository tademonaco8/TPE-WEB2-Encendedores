<?php
/* Smarty version 4.2.1, created on 2022-10-18 05:13:21
  from 'C:\xampp3\htdocs\proyectos\TPE\templates\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634e19d11cec87_37667487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a11e39a47409e2911fca14719bc9de7ced4a1dda' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\proyectos\\TPE\\templates\\list.tpl',
      1 => 1666062798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634e19d11cec87_37667487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form>

<ul class="list-group">
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
 </span>
            <div>

            </div>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
