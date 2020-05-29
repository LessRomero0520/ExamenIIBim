{include file='Cabeceras/Header.tpl' titulo='Home'}
	{if isset($e)}
		{if isset($men)}
			<div align="center">
				<h6>{$men}</h6>
			</div>
		{/if}

		<div class="row">
			<div class="col s4">
			
				{include file='Menu.tpl'}

			</div>

			<div class="col s8">

				{if $vista == "CrearProducto"}
					{include file='CrearProducto.tpl'}
					
				{else if $vista == "VerInventario"}
					{include file='Inventario.tpl'}


					{else}
						<img class="materialboxed " width="100%" src="Recursos/Img/tools.jpg">
				{/if}

			</div>

		</div>
	{/if}
{include file='Cabeceras/Footer.tpl'}
