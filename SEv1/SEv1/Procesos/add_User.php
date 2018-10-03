<?php
/**
*JOSE_CHAC
*24082016 11:58
*/

$url = $_POST['url'];
$name = $_POST['nombre'];
$password = $_POST['contraseña'];
$passwordR = $_POST['contraseñaR'];
$email = $_POST['eMail'];
$telefono = $_POST['telefono'];

$db_hostname = "localhost";
$db_database = "u881005694_scane";
$db_username = "u881005694_se16";
$db_password = "SCANeat";

$mysqli = new mysqli($db_hostname,$db_username,$db_password);
$db_select = mysqli_select_db($mysqli,$db_database);

$sql_1="SELECT * FROM Usuario WHERE emailU = '$email'";
$email_V = mysqli_query($mysqli,$sql_1);
$emailV = mysqli_num_rows($email_V);//0

if($password==$passwordR){
    if($emailV > 0){
        echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
    }
    else{
        $sql = "INSERT INTO Usuario(nombreU,contrase�aU,telefonoU,emailU) values ('$name','$password','$telefono','$email')";
        
        $result = mysqli_query($mysqli,$sql);
        mysqli_close($mysqli);
        
        echo ' <script language="javascript">alert("Usuario registrado");</script> ';
        echo "<script>location.href='$url'</script>";
        }
    }
    else{
        echo 'Las contraseñas son incorrectas';
        echo "<script>location.href='$url'</script>";
        }
        
?>