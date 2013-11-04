<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Sesion</title>
</head>
<body>
<Table width= "50%" align="center" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td>
	<fieldset>

<?php

//if(isset ($_SESSION['usuario'])){
//	header('location: datos.php');
//	}

if ($_POST['codigo']==100 AND $_POST['contraseña']=="udg"){
	echo "BIENVENIDO";
	

}else{
	echo "SESION ERRONEA";
	
}

?>

<form Action="formulario.php" method="post">
<br/>
<br/>
<input type="submit" value="Cerrar Sesion"/>
<br/>
<br/>
<input type="submit" onclick = "this.form.action= 'Conexion.php'" value="Iniciar Conexion"/>


</body>
</html> 