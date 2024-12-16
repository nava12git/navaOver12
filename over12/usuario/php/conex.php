<?php
//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";

//conectamos la base datos
$connection = mysqli_connect($host,$user,$pass);

//hacemos llamado al imput de formuario
$metodo = $_POST["metodo_pago"] ;
$nombre = $_POST["nombre"] ;
$correo = $_POST["correo"] ;
$monto = $_POST["monto"];
//indicamos el nombre de la base datos
        $dbase = "over12";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$dbase);

 //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        
$instruccion_SQL = "INSERT INTO pago (metodo,nombre, correo, monto)
                             VALUES ('$metodo','$nombre','$correo','$monto')";
                           
                           
        $resultado = mysqli_query($connection,$instruccion_SQL);

           //se realiza la consulta en mysql xampp indicanco nombre de la tabla
       $consulta = "SELECT * FROM pago";
        
       $result = mysqli_query($connection,$consulta);
       if(!$result) 
       {
         echo "No se ha podido realizar la consulta";
       }
       
       echo "<table>";
       echo "<tr>";
       echo "<th><h1>id_pago</th></h1>";
       echo "<th><h1>Metodo</th></h1>";
       echo "<th><h1>nombre</th></h1>";
       echo "<th><h1>correo</th></h1>";
       echo "<th><h1>monto</th></h1>";
       echo "</tr>";
       
       while ($colum = mysqli_fetch_array($result))
       {
           echo "<tr>";
           echo "<td><h2>" . $colum['idpago']. "</td></h2>";
           echo "<td><h2>" . $colum['metodo']. "</td></h2>";
           echo "<td><h2>" . $colum['nombre'] . "</td></h2>";
           echo "<td><h2>" . $colum['correo'] . "</td></h2>";
           echo "<td><h2>" . $colum['monto'] . "</td></h2>";
           echo "</tr>";
       }
       //echo "</table>";
       
       mysqli_close( $connection );
       
      
       


   //echo "Fuera " ;
echo'<a href="/over12/html/gracias.html"> gracias</a>';

?>