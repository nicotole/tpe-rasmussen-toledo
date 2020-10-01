<?php
/* Smarty version 3.1.36, created on 2020-10-01 03:00:29
  from 'C:\xampp\htdocs\tpeweb2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f752a2d91bf89_16089559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9badb64d23305eec8e44f2931823bb176e32b55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2\\templates\\header.tpl',
      1 => 1601513904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f752a2d91bf89_16089559 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href=<?php echo BASE_URL;?>
/>
        <link rel="stylesheet" href="estilos/style.css">
        <?php echo '<script'; ?>
 src="./js/navigationBar.js"><?php echo '</script'; ?>
> 
        <link rel="shortcut icon" href="imagenes/logo/1.2.png" type="image/x-icon">
        <title>CINEMA</title>
    </head>
    <body>
        <!-- Inicio header y barra -->
        <header>
            <img class="imgMenu"src="imagenes/menu.png" alt="">
            <h1>CINEMA</h1>
            <img src="imagenes/logo/1.2.png" alt="logo" class="logo">
        </header>
        
        <nav>
            <ul class="navigation">
                <li> <a href="home"> Inicio </a> </li>
                <li> <a href="generos"> Generos </a> </li>
                <li> Registrarse </li>
            </ul>
        </nav>
        <?php }
}
