<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 19:52:33
  from 'C:\xampp\htdocs\ExamenIIBim\templates\CrearProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed14be1650f56_42855344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7375200449964845617c13b1467d88f8d69c5b91' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ExamenIIBim\\templates\\CrearProducto.tpl',
      1 => 1590774748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed14be1650f56_42855344 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $(document).ready(function() {
		$('select').material_select();
    });
	 
<?php echo '</script'; ?>
>

	<div class="row">
	  <div class="col s12   light-green lighten-1">
		<h5 class="center-align">Crear Producto</h5>
	  </div>
	</div>

	<form class = "col s12 center-align" method="post" action="?controller=User&action=GuardarInvent">
		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">account_circle</i>
				<input placeholder = "Nombre" name="nombre"  id = "nombre" type = "text" class = "active validate" required />
				<label for = "nombre">Nombre</label>
			</div>
		</div>
		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">account_circle</i>
				<input placeholder = "Descripcion" name="descripcion"  id = "descripcion" type = "text" class = "active validate" required />
				<label for = "descripcion">Descripcion</label>
			</div>
		</div>
		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">account_circle</i>
				<input placeholder = "Precio" name="precio"  id = "precio" type = "text" class = "active validate" required />
				<label for = "precio">Precio</label>
			</div>
		</div>
		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">account_circle</i>
				<input placeholder = "Cantidad" name="cantidad"  id = "cantidad" type = "text" class = "active validate" required />
				<label for = "cantidad">Cantidad</label>
			</div>
		</div>

		<div class="row">
		  <div class="input-field col s12">
			<input type="submit" value="CREAR" class="btn col s12 light-green darken-4">
		  </div>
		</div>
	</form><?php }
}
