<?php
/**
 * @author JOSE_CHAC
 * @copyright 1782016 14:42
 * @project ProcesosPHP
 */
 
$restauranteSP = $_POST[''];
$direccionEP = $_POST[''];
$nombreSP = $_POST[''];
$emailSP = $_POST[''];
$telefonoSP = $_POST[''];
//<<<<<<<<<<<<<<
$nombrePP = $_POST[''];
$cantidadPP = $_POST[''];
$comentariosPP = $_POST[''];

$db_hostname = "localhost";
$db_database = "u881005694_scane";
$db_username = "u881005694_se16";
$db_password = "SCANeat";

$mysqli = new mysqli($db_hostname,$db_username,$db_password);

$db_select = mysqli_select_db($mysqli,$db_database);

$textReserv = "De: " $nombreSP . "  " . $emailSP . "  " . $telefonoSP;
$textReserv .= "\n\n Asunto: Pedido para " . $restauranteSP;
$textReserv .= "\n\n" . $cantidadPP . "orden(es) de " . $nombrePP;
$textReserv .= "\n\nComentarios:" . $comentarioSP;

$idUser = "select iduser from user where email =" . $emailSR;

$sql = "INSERT INTO User() values ('$textReserv','idusuario','idrest','idproduct')";

$result = mysqli_query($mysqli,$sql);

mysqli_close($mysqli);

?>