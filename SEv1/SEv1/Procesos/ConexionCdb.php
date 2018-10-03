<?php
$name = $_POST['nombre'];
$password = $_POST['contraseña'];
$email = $_POST['eMail'];
$telefono = $_POST['telefono'];

$db_hostname = "mysql.hostinger.mx";
$db_database = "u966262455_scane";
$db_username = "u966262455_josec";
$db_password = "Jcc1294";

$mysqli = new mysqli($db_hostname,$db_username,$db_password);

if (!$mysqli) die("NO SE PUDO CONECTAR A LA BASE DE DATOS:".mysql_error());
else
echo "Conexión exitosa!";

$db_select = mysqli_select_db($mysqli,$db_database);
if(!$db_select) die("No se encotro la base de datos:".mysql_error());

$sql = "INSERT INTO User(nombre,contraseña,correo,telefono) values ('$name','$password','$email','$telefono')";

$result = mysqli_query($mysqli,$sql);
if(!$result) die("Error al insertar los datos:".mysql_error());
else
echo "<p>Data Save Succefull</p>";

mysqli_close($mysqli);
?>