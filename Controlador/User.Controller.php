<?php
	class User
    {
	   public function Login()
       {
            $smarty=new Smarty();
			$user=new Usuarios();
			$lib=new Librerias();
            //$smarty->caching=true;
            
            $nombre=$_POST['usuario'];
			$pass=$_POST['pass'];

			$dato=$user->BuscarUsuario($nombre, $pass);
			$d=$lib->DatosRow($dato);
			//var_dump($dato);

			if($dato->num_rows==1)
			{
				session_start();
				$_SESSION['user']=$nombre;
				$_SESSION['vista']="null";
				
				$smarty->assign('e','null');
				$smarty->assign('vista',$_SESSION['vista']);
				$smarty->assign('usuario',$_SESSION['user']);
				$smarty->display('Master.tpl');

			}
			else 
			{
				$smarty->display('Master.tpl');
			}
		}

	   public function GuardarInvent()
	   {
			//echo "en guardar usuario";
			$guardar = new Inventario();
			$smarty=new Smarty();
			session_start();

			$nom=$_POST['nombre'];
			$des=$_POST['descripcion'];
			$precio=$_POST['precio'];
			$cant=$_POST['cantidad'];

			//var_dump($_POST);

			$transaccion=$guardar->AgregarInvent($nom,$des,$precio,$cant);

			if($transaccion)
			{
				$men= "producto agregado";
			}
			else 
			{
				$men= "producto no agregado";
			}
			
			$smarty->assign('men',$men);
			$smarty->assign('e','null');
			$smarty->assign('vista','CrearProducto');
			$smarty->assign('usuario',$_SESSION['user']);
			$smarty->display('Master.tpl');
		
	   }

    }
?>