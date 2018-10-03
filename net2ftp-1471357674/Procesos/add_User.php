<?php
//variables de post
$name = $_POST['nombre'];
$password = $_POST['contraseña'];
$email = $_POST['eMail'];
$telefono = $_POST['telefono'];

//variables de conexxion con la base de datos
$db_hostname = "localhost";
$db_database = "u881005694_scane";
$db_username = "u881005694_se16";
$db_password = "SCANeat";

//coneccion con la base de datos
$mysqli = new mysqli($db_hostname,$db_username,$db_password);

//seleccion de la base de datos a conectar
$db_select = mysqli_select_db($mysqli,$db_database);

//intruccion sql para la insertar un usuario en la base de datos
$sql = "INSERT INTO User(nombre,contraseña,telefono,email) values ('$name','$password','$telefono','$email')";


$result = mysqli_query($mysqli,$sql);

//cerrar la conexion
mysqli_close($mysqli);

?>	