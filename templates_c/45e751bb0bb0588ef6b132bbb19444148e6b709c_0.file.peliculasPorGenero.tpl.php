<?php
/* Smarty version 3.1.36, created on 2020-10-01 22:16:44
  from 'C:\xampp\htdocs\tpeweb2\templates\peliculasPorGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f76392c8c28d0_26892812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45e751bb0bb0588ef6b132bbb19444148e6b709c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2\\templates\\peliculasPorGenero.tpl',
      1 => 1601583381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f76392c8c28d0_26892812 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2><?php echo $_smarty_tpl->tpl_vars['genero_s']->value;?>
</h2>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peliculasPorGenero_s']->value, 'peliculaPorGenero');
$_smarty_tpl->tpl_vars['peliculaPorGenero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['peliculaPorGenero']->value) {
$_smarty_tpl->tpl_vars['peliculaPorGenero']->do_else = false;
?>
    <div class="pelicula">
        <ul>
            <li>Nombre: <?php echo $_smarty_tpl->tpl_vars['peliculaPorGenero']->value->titulo;?>
</li>
            <li>Sinopsis: <?php echo $_smarty_tpl->tpl_vars['peliculaPorGenero']->value->sinopsis;?>
</li>
            <li>Duracion: <?php echo $_smarty_tpl->tpl_vars['peliculaPorGenero']->value->duracion;?>
</li>
            <li>Puntuacion: <?php echo $_smarty_tpl->tpl_vars['peliculaPorGenero']->value->puntuacion;?>
/5</li>
            <li>Precio: <?php echo $_smarty_tpl->tpl_vars['peliculaPorGenero']->value->precio;?>
 rupias</li>
        </ul>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
