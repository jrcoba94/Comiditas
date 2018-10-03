<?php
/**
*JOSE_CHAC
*24082016 11:58
*/

$url = $_POST['url'];

$restauranteSR = $_POST['restaurantR'];
$fechaSR = $_POST['fechaR'];
$horaSR = $_POST['horaR'];
$npersonasSR = $_POST['numeroR'];
$nombreSR = $_POST['nombreR'];
$emailSR = $_POST['emailR'];
$telefonoSR = $_POST['telefonoR'];
$comentarioSR = $_POST['comentarioR'];

$db_hostname = "localhost";
$db_database = "u881005694_scane";
$db_username = "u881005694_se16";
$db_password = "SCANeat";

$mysqli = new mysqli($db_hostname,$db_username,$db_password);

$db_select = mysqli_select_db($mysqli,$db_database);

$textReserv = "De: " . $nombreSR . "  " . $emailSR . "  " . $telefonoSR;
$textReserv .= "\n\n Asunto: Reservación a " . $restauranteSR;
$textReserv .= "\n\nRecervación para " . $npersonasSR . " el " . $fechaSR . " a las " . $horaSR;
$textReserv .= "\n\nComentarios: " . $comentarioSR;

$idUser = "SELECT iduser FROM Usuario WHERE emailU = '$emailSR'";
$idRestaurant = "SELECT idRestaurante FROM Restaurante WHERE nombreR = '$restauranteSP'";

if($idUser==""){
if($idRestaurant==""){
echo '<script>alert("Su Reservación no ha sido solicitada, intente de nuevo")</script>';
    echo "<script>location.href='$url'</script>";
}
}
else{
$sql = "INSERT INTO Reservaciones(ReservacionC,Usuario_idUsuario,Restaurante_idRestaurante) values ('$textReserv','$idUser','$idRestaurant')";
mysqli_query($mysqli,$sql);
mysqli_close($mysqli);
echo '<script>alert("Su Reservación ha sido solicitada")</script>';
echo "<script>location.href='$url'</script>";
}

?>