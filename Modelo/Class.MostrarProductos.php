<?php
	/**
	 * 
	 */
	class MostrarProductos
	{
		public function VerProducto ()
		{
			//echo "en crear usuario";
			$con=new Conexion();
			$query="SELECT * FROM `inventario` WHERE 1";

			$consulta=$con->query($query);
			$con->close();
			return $consulta;
		}
	}
?>