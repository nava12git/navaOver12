<?php
//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";

//conectamos la base datos
$connection = mysqli_connect($host,$user,$pass);

//hacemos llamado al imput de formuario
$nombre = $_POST["nombre"] ;
$correo = $_POST["correo"] ;
$contraseña = $_POST["contraseña"] ;
$roll=$_POST["roll"];

//indicamos el nombre de la base datos
        $datab = "over12";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

 //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        
$instruccion_SQL = "INSERT INTO login (nombre, correo, contrasena,roll)
                             VALUES ('$nombre','$correo','$contraseña','$roll')";
                           
                           
        $resultado = mysqli_query($connection,$instruccion_SQL);
        

         //se realiza la consulta en mysql xampp indicanco nombre de la tabla
         $consulta = "SELECT * FROM login";
        
         $result = mysqli_query($connection,$consulta);
         if(!$result) 
         {
           echo "No se ha podido realizar la consulta";
         }
         
         echo "<table>";
         echo "<tr>";
         echo "<th><h1>id_usu</th></h1>";
         echo "<th><h1>Nombre</th></h1>";
         echo "<th><h1>Correo</th></h1>";
         echo "<th><h1>Contraseña</th></h1>";
         echo "<th><h1>Roll</th></h1>";
         echo "</tr>";
         
         while ($colum = mysqli_fetch_array($result))
         {
             echo "<tr>";
             echo "<td><h2>" . $colum['id_usu']. "</td></h2>";
             echo "<td><h2>" . $colum['nombre']. "</td></h2>";
             echo "<td><h2>" . $colum['correo'] . "</td></h2>";
             echo "<td><h2>" . $colum['contrasena'] . "</td></h2>";
             echo "<td><h2>" . $colum['roll'] . "</td></h2>";
             echo "</tr>";
         }
         //echo "</table>";
         
         mysqli_close( $connection );
         
            //echo "Fuera " ;
            echo'<a href="../over12NM/over12/usuario/html/clientes.html">Inicio</a>';
         
         ?> 