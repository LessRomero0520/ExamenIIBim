<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 19:38:24
  from 'C:\xampp\htdocs\ExamenIIBim\templates\Master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed14890c093d0_67135106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6edd969b9ab6e9987944af36d8814dbb0e279d76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ExamenIIBim\\templates\\Master.tpl',
      1 => 1590773898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Menu.tpl' => 1,
    'file:CrearProducto.tpl' => 1,
    'file:Inventario.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_5ed14890c093d0_67135106 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Cabeceras/Header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titulo'=>'Home'), 0, false);
?>
	<?php if (isset($_smarty_tpl->tpl_vars['e']->value)) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['men']->value)) {?>
			<div align="center">
				<h6><?php echo $_smarty_tpl->tpl_vars['men']->value;?>
</h6>
			</div>
		<?php }?>

		<div class="row">
			<div class="col s4">
			
				<?php $_smarty_tpl->_subTemplateRender('file:Menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			</div>

			<div class="col s8">

				<?php if ($_smarty_tpl->tpl_vars['vista']->value == "CrearProducto") {?>
					<?php $_smarty_tpl->_subTemplateRender('file:CrearProducto.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					
				<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == "VerInventario") {?>
					<?php $_smarty_tpl->_subTemplateRender('file:Inventario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


					<?php } else { ?>
						<img class="materialboxed " width="100%" src="Recursos/Img/tools.jpg">
				<?php }?>

			</div>

		</div>
	<?php }
$_smarty_tpl->_subTemplateRender('file:Cabeceras/Footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
