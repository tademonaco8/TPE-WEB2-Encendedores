<?php
/* Smarty version 4.2.1, created on 2022-10-18 03:41:25
  from 'C:\xampp3\htdocs\proyectos\TPE\templates\item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634e04456287c3_48908334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e49a46514fc771bcc915379589f9ac89bcfcab76' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\proyectos\\TPE\\templates\\item.tpl',
      1 => 1666057281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_634e04456287c3_48908334 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <img src="<?php echo $_smarty_tpl->tpl_vars['lighter']->value->img_url;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lighter']->value->producto;?>
">
</div>

<aside>
    <div>
        <h3><?php echo $_smarty_tpl->tpl_vars['lighter']->value->producto;?>
</h3>
    </div>

    <span> <?php echo $_smarty_tpl->tpl_vars['lighter']->value->precio;?>
</span>
    <span> Tipo: <?php echo $_smarty_tpl->tpl_vars['lighter']->value->descripcion_tipo;?>
</span>
    <span> Recargable con: <?php echo $_smarty_tpl->tpl_vars['lighter']->value->tipo_gas;?>
</span>
    <p> <?php echo $_smarty_tpl->tpl_vars['lighter']->value->descripcion;?>
 </p>

</aside> 

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
