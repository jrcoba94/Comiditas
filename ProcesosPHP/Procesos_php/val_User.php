<?php

/**
 * @author JOSE_CHAC
 * @copyright 1782016 14:42
 * @project ProcesosPHP
 */

session_start();
$host = $_SERVER["HTTP_HOST"];
$url = $_SERVER["REQUEST_URI"];

//coneccion con la base de datos
$db_hostname = "localhost";
$db_database = "u881005694_scane";
$db_username = "u881005694_se16";
$db_password = "SCANeat";

$mysqli = new mysqli($db_hostname,$db_username,$db_password);
$db_select = mysqli_select_db($mysqli,$db_database);

$emailL = $_POST[''];
$contrasenaL = $_POST[''];

$sql = "SELECT * FROM User WHERE email = '$emailL'";

$query = mysqli_query($mysqli,$sql);

if($resultado = mysqli_fetch_assoc($query)){
    if($contrasenaL == $resultado['contraseñaU']){
        $_SESSION['idUsuario'] = $resultado['idUsuario'];
        $_SESSION['nombreU'] = $resultado['nombreU'];
        $_SESSION['telefonoU'] = $resultado['telefonoU'];
        $_SESSION['emailU'] = $resultado['emailU'];
        
        header("Location:'$url'");
    }
    else{
        echo '<script>alert("Contraseña incorrecta intente de nuevo :(")</script>';
        echo "<script>location.href='$url'</script>";
    }
}
else{
    echo '<script>alert("Usuario no registrado, porfavor registrese para poder ingresar")</script>';
    echo "<script>location.href='$url'</script>";
}

?>