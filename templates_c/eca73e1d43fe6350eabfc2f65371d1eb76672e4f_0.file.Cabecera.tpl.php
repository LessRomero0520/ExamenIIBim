<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 19:47:45
  from 'C:\xampp\htdocs\ExamenIIBim\templates\Cabecera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed14ac1b321f3_36051900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eca73e1d43fe6350eabfc2f65371d1eb76672e4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ExamenIIBim\\templates\\Cabecera.tpl',
      1 => 1590774458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed14ac1b321f3_36051900 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row  light-green darken-11">
	<div class=" col s4 " >
		<p class="white-text  "> <strong>USUARIO: <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</strong> </p>
	</div>
		<div class=" col s4" >
		<img class="materialboxed " data-caption="Usuario" width="100"  src="Recursos/FotosTrab/php.png">
	</div>
	<div class=" col s4 ">
		<a href="?controller=Salir&action=CerrarSesion" class="brand-logo white-text  ">Salir</a>
	</div>
</div><?php }
}
