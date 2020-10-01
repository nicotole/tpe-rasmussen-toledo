<?php
/* Smarty version 3.1.36, created on 2020-10-01 03:00:38
  from 'C:\xampp\htdocs\tpeweb2\templates\item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f752a3620df33_30747801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9040f6667b232172874318a8c919c716bd42e944' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2\\templates\\item.tpl',
      1 => 1601513904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f752a3620df33_30747801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="pelicula">
    <ul>
        <li>Nombre:<?php echo $_smarty_tpl->tpl_vars['item_s']->value->titulo;?>
</li>
        <li>Sinopsis:<?php echo $_smarty_tpl->tpl_vars['item_s']->value->sinopsis;?>
</li>
        <li>Duracion:<?php echo $_smarty_tpl->tpl_vars['item_s']->value->duracion;?>
</li>
        <li>Puntuacion:<?php echo $_smarty_tpl->tpl_vars['item_s']->value->puntuacion;?>
</li>
        <li>Precio:<?php echo $_smarty_tpl->tpl_vars['item_s']->value->precio;?>
 rupias</li>
    </ul>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
