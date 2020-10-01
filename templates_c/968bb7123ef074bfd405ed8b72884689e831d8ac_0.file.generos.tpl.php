<?php
/* Smarty version 3.1.36, created on 2020-10-01 22:02:00
  from 'C:\xampp\htdocs\tpeweb2\templates\generos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f7635b8885cd4_66182647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '968bb7123ef074bfd405ed8b72884689e831d8ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2\\templates\\generos.tpl',
      1 => 1601582506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7635b8885cd4_66182647 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos_s']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
    <a href="visualizarGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->nombre;?>
"> <h2><?php echo $_smarty_tpl->tpl_vars['genero']->value->nombre;?>
 </h2></a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
