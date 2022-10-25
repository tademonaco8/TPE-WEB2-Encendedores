<?php
/* Smarty version 4.2.1, created on 2022-10-26 00:19:17
  from 'C:\xampp3\htdocs\proyectos\TPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_635860e542a380_44250326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01d36f9bbcdba7b94e6babaad005dfb7eb101ce9' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\proyectos\\TPE\\templates\\header.tpl',
      1 => 1666736354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635860e542a380_44250326 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/style.css">
    <title>FuegoAmigo</title>
</head>
<body>
    <header>
        <nav>
          <ul>
            <li> 
              <a href="list">Home</a>
            </li>
            <li>
              <a href="adminlist">Admin</a>
            </li>
            <?php if (!(isset($_SESSION['IS_LOGGED']))) {?>
            <li>
              <a href="login">Login</a>
            </li>
            <?php } else { ?>
            <li>
              <a href="logout">Logout</a>
            </li>
            <?php }?>
          </ul>
        </nav>
    </header>
    <main class="container">
<?php }
}
