<?php
/**
 * @author JOSE_CHAC
 * @copyright 1782016 14:42
 * @project ProcesosPHP
 */
 
$restauranteSR = $_POST[''];
$fechaSR = $_POST[''];
$horaSR = $_POST[''];
$npersonasSR = $_POST[''];
$nombreSR = $_POST[''];
$emailSR = $_POST[''];
$telefonoSR = $_POST[''];
$comentarioSR = $_POST[''];

$db_hostname = "localhost";
$db_database = "u881005694_scane";
$db_username = "u881005694_se16";
$db_password = "SCANeat";

$mysqli = new mysqli($db_hostname,$db_username,$db_password);

$db_select = mysqli_select_db($mysqli,$db_database);

$textReserv = "De: " $nombreSR . "  " . $emailSR . "  " . $telefonoSR;
$textReserv .= "\n\n Asunto: Reservaci�n a " . $restauranteSR;
$textReserv .= "\n\nRecervaci�n para" . $npersonasSR . "el" + $fechaSR + "a las" . $horaSR;
$textReserv .= "\n\nComentarios:" . $comentarioSR;

$idUser = "select iduser from user where email =" + $emailSR;

$sql = "INSERT INTO User() values ('','','','')";

$result = mysqli_query($mysqli,$sql);

mysqli_close($mysqli);

?>