<?php
/**
*JOSE_CHAC
*24082016 11:58
*/

$url = $_POST['url'];

$restauranteSP = $_POST['restaurantSP'];
$direccionEP = $_POST['direccionSP'];
$nombreSP = $_POST['nombreSP'];
$emailSP = $_POST['emailSP'];
$telefonoSP = $_POST['telefonoSP'];
//<<<<<<<<<<<<<<
$nombrePP = $_POST['nombrePO'];
$cantidadPP = $_POST['cantidadPO'];
$comentariosPP = $_POST['comentarioPO'];

$db_hostname = "localhost";
$db_database = "u881005694_scane";
$db_username = "u881005694_se16";
$db_password = "SCANeat";

$mysqli = new mysqli($db_hostname,$db_username,$db_password);

$db_select = mysqli_select_db($mysqli,$db_database);

$textReserv = "De: " . $nombreSP . "  " . $emailSP . "  " . $telefonoSP;
$textReserv .= "\n\n Asunto: Pedido para " . $restauranteSP;
$textReserv .= "\n\n" . $cantidadPP . "orden(es) de " . $nombrePP;
$textReserv .= "\n\nComentarios:" . $comentarioSP;

$idUser = "SELECT iduser FROM Usuario WHERE emailU = '$emailSR'";
$idRestaurant = "SELECT idRestaurante FROM Restaurante WHERE nombreR = '$restauranteSP'";
$idProducto = "SELECT idProductosR FROM ProductosR WHERE nombreP = '$nombrePP'";

$sql = "INSERT INTO Pedidos(PedidosC,Usuario_idUsuario,Restaurante_idRestaurante,ProductosR_idProductosR) values ('$textReserv','$idUser','$idRestaurant','$idProducto')";

$result = mysqli_query($mysqli,$sql);

mysqli_close($mysqli);

    echo '<script>alert("Su pedido ha sido solicitado")</script>';
    echo "<script>location.href='$url'</script>";
?>