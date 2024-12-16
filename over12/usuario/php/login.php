<?php

 include('conexion.php');

$usu 	= $_POST["txtusuario"];
$pass 	= $_POST["txtpassword"];
$rol 	= $_POST["rol"];



$queryusuario = mysqli_query($conn,"SELECT * FROM login WHERE nombre ='$usu' and contrasena = '$pass' and roll = '$rol'");
$nr 		= mysqli_num_rows($queryusuario);  
	
if ($nr == 1 )  
	{ 
		if($rol=="Usuario")
			{	
				header("Location: /over12NM/over12/usuario/html/clientes.html");
			}
		else if ($rol=="Admin")
			{
				header("Location: /over12NM/over12/admin/pag_admin.php");
			}
	}
else
	{
	echo "<script> alert('Usuario, contraseña o rol incorrecto.');window.location= '/over12NM/over12/usuario/html/LOG.html' </script>";
	}


?>
