<script>
    $(document).ready(function() {
    $('select').material_select();
    });
</script>

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
</div>