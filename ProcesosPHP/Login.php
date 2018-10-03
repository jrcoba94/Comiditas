<?php
/*
JOSE_CHAC
17082016
*/

session_start();

$url = $_POST['url'];
$emailL = $_POST['emailL'];
$contrasenaL = $_POST['contraseñaL'];

//coneccion con la base de datos
$db_hostname = "localhost";
$db_database = "u881005694_scane";
$db_username = "u881005694_se16";
$db_password = "SCANeat";

$mysqli = new mysqli($db_hostname,$db_username,$db_password);
$db_select = mysqli_select_db($mysqli,$db_database);

//$sql = "SELECT * FROM Usuario WHERE emailU = '$emailL'";
$sql = "SELECT * FROM Usuario WHERE emailU = '$emailL'";
mysqli_close($mysqli);

$query = mysqli_query($mysqli,$sql);

if($resultado = mysqli_fetch_assoc($query)){
    if($contrasenaL == $resultado['contraseñaU']){
        $_SESSION['idUsuario'] = $resultado['idUsuario'];
        $_SESSION['nombreU'] = $resultado['nombreU'];
        $_SESSION['telefonoU'] = $resultado['telefonoU'];
        $_SESSION['emailU'] = $resultado['emailU'];
        
        echo "<script>location.href='$url'</script>";
        //header("Location:'$url'");   $sql = "SELECT * FROM Usuario WHERE emailU = '$emailL'";        $sql = "SELECT * FROM `Usuario` WHERE `contraseñaU` = \'yui\' AND `emailU` = \'juan@gmail.com\' LIMIT 0, 30 ";
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
