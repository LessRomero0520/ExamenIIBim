<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 19:52:39
  from 'C:\xampp\htdocs\ExamenIIBim\templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed14be7503147_06531270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2721d2d7a390fd835c280bf1769d6650fab14d2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ExamenIIBim\\templates\\Login.tpl',
      1 => 1590774665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed14be7503147_06531270 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $(document).ready(function() {
    $('select').material_select();
    });
<?php echo '</script'; ?>
>

<div class="container">
	<div style="height:50px"></div>

	<div class="row">
	  <div class="col s12 light-green darken-11">
		<h5 class="center-align">REGISTRO</h5>
	  </div>
	</div>

	<form class = "col s12 center-align" method="post" action="?controller=User&action=Login">
		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">account_circle</i>
				<input placeholder = "Nombre de Usuario" name="usuario"  id = "usuario" type = "text" class = "active validate" required />
				<label for = "usuario">Usuario</label>
			</div>
		</div>
		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">vpn_key</i>
				<input placeholder = "Password de Usuario" name="pass"  id = "pass" type = "password" class = "active validate" required />
				<label for = "pass">Password</label>
			</div>
		</div>


		<div class="row">
		  <div class="input-field col s12">
			<input type="submit" value="INGRESAR" class="btn col s4  light-green darken-4">
		  </div>
		</div>
	</form>
</div><?php }
}
