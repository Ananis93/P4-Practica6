<?php

$conexion = mysql_connect("localhost","root","")
or die ("Fallo en el establecimiento de la conexión");
echo "Contactos en directorio:<br/>";

mysql_select_db("directorio")
or die("Error en la selección de la base de datos");

$result = mysql_query ("select * from contacto" )
or die("Error en la consulta SQL");

while( $row = mysql_fetch_array ( $result )) {
   
   echo "<br/>";
   echo $row [ "id" ];
   echo " ";	
   echo $row [ "nombre" ];
   echo " ";
   echo $row [ "ap" ];
   echo " ";
   echo $row [ "am" ];
   echo " ";
   echo $row [ "domicilio" ];
   echo " ";
   echo $row [ "telefono" ];

}

?>