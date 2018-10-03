<?php
/**
*JOSE_CHAC
*24082016 11:58
*/

session_start();

$url = $_POST['url'];
$emailL = $_POST['emailL'];
$contrasenaL = $_POST['contrasenaL'];

$db_hostname = "localhost";
$db_database = "u881005694_scane";
$db_username = "u881005694_se16";
$db_password = "SCANeat";

$mysqli = new mysqli($db_hostname,$db_username,$db_password);
$db_select = mysqli_select_db($mysqli,$db_database);

$sql = "SELECT * FROM Usuario WHERE emailU = '$emailL' ";

$query = mysqli_query($mysqli,$sql);

if($resultado==mysqli_fetch_assoc($query)){
if($contrasenaL==$resultado['contraseñaU']){

$_SESSION['Usuario'] = $resultado['idUsuario'];
$_SESSION['nombre'] = $resultado['nombreU'];
$_SESSION['telefono'] = $resultado['telefonoU'];
$_SESSION['email'] = $resultado['emailU'];

header("Location:'$url'");
//echo "<script>location.href='$url'</script>"; $sql = "SELECT * FROM Usuario WHERE emailU = '$emailL'"; $sql = "SELECT * FROM `Usuario` WHERE `contrase�aU` = \'yui\' AND `emailU` = \'juan@gmail.com\' LIMIT 0, 30 ";

}
else{

echo '<script>alert("Contraseña incorrecta intente de nuevo")</script>';
echo "<script>location.href='$url'</script>";

}
}
else{

echo '<script>alert("Usuario no registrado porfavor registrese para poder ingresar")</script>';
echo "<script>location.href='$url'</script>";

}

?>