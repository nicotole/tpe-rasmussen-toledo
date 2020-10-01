<?php
/* Smarty version 3.1.36, created on 2020-10-01 22:14:30
  from 'C:\xampp\htdocs\tpeweb2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f7638a6787bc9_99689174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58ab8692e58b567f1a7261e8e7e7c292f765d3c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2\\templates\\home.tpl',
      1 => 1601583264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7638a6787bc9_99689174 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peliculasConGenero_s']->value, 'peliculaConGenero');
$_smarty_tpl->tpl_vars['peliculaConGenero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['peliculaConGenero']->value) {
$_smarty_tpl->tpl_vars['peliculaConGenero']->do_else = false;
?>
    <div class="pelicula">
        <ul>
            <li>Nombre:<a href="visualizarItem/<?php echo $_smarty_tpl->tpl_vars['peliculaConGenero']->value->titulo;?>
"> <?php echo $_smarty_tpl->tpl_vars['peliculaConGenero']->value->titulo;?>
 </a> </li>
            <li>Genero: <?php echo $_smarty_tpl->tpl_vars['peliculaConGenero']->value->nombre;?>
</li>
        </ul>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>            

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
