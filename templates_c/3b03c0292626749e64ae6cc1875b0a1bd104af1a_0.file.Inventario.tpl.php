<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 19:55:41
  from 'C:\xampp\htdocs\ExamenIIBim\templates\Inventario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed14c9d8fa474_57258580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b03c0292626749e64ae6cc1875b0a1bd104af1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ExamenIIBim\\templates\\Inventario.tpl',
      1 => 1590774870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed14c9d8fa474_57258580 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $(document).ready(function() {
		$('select').material_select();
    });
	 
<?php echo '</script'; ?>
>

	<div class="row">
	  <div class="col s12   light-green lighten-1">
		<h5 class="center-align">Inventario</h5>
	  </div>
	</div>

	<form class = "col s12 center-align" method="post" action="?controller=User&action=Inventario General">
		<div class = "row">
			<div class = "input-field col s12">
				<table border="1">
					<tr>
						<td>id</td>
						<td>Nombre</td>
						<td>Descrpcion</td>
						<td>Precio</td>
						<td>Cantidad</td>
					</tr>
					
						<tr>
							<td><?php echo '<?php ';?>
echo $mostrar['id'] <?php echo '?>';?>
</td>
							<td><?php echo '<?php ';?>
echo $mostrar['Nombre'] <?php echo '?>';?>
</td>
							<td><?php echo '<?php ';?>
echo $mostrar['Descricion'] <?php echo '?>';?>
</td>
							<td><?php echo '<?php ';?>
echo $mostrar['Precio'] <?php echo '?>';?>
</td>
							<td><?php echo '<?php ';?>
echo $mostrar['Cantidad'] <?php echo '?>';?>
</td>
						</tr>
			
					
				</table>

			</div>
		</div>
	</form>

		<?php }
}
