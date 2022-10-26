<?php
/* Smarty version 4.2.1, created on 2022-10-26 03:44:17
  from 'C:\xampp3\htdocs\proyectos\TPE\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_635890f1dcaa08_06252604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b433904fc3f5535df256be01e0f655be264d03b5' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\proyectos\\TPE\\templates\\formLogin.tpl',
      1 => 1666746280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_635890f1dcaa08_06252604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--formulario-->
<form action="validate" method="POST">
  <div>
    <label class="formLabel" for="inputEmail4">Email</label>
    <input class="formControl" type="email" id="inputEmail4" name="email">
  </div>
  <div>
    <label class="formLabel" for="inputPassword4">Password</label>
    <input class="formControl" type="password" id="inputPassword4" name="password">
  </div>
  <div>
    <label class="formLabel" for="inputAddress">Name</label>
    <input class="formControl" type="text" id="inputAddress" name="name">
  </div>

  <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
    <div>
      <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </div>
  <?php }?>



  <div>
    <button type="submit">Sign in</button>
  </div>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
