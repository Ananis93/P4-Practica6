<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Formulario</title>
</head>
<body>
<Table width= "50%" align="center" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td>
	<fieldset>
<form Action="datos.php" method="post">
Codigo<br/>
<input type="text" name="codigo"><p/>
Contraseña<br/>
<input type="password" name="contraseña"><p/>
<input type="submit" value="Enviar"/><br/>
</form>
</body>
</html> 