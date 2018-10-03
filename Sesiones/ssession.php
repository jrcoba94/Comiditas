<?php
require('Sesion.php');
session_start();
$nombre = $_SESSION['nombre'];

echo "$nombre";
echo $_POST['$datos']= $nombre;
echo "<script>function data(){
    $('#datos').val($nombre);
};</script>"
////echo "<META HTTP-EQUIV="Refresh" CONTENT="0;URL=recibe.htm?numero="$nombre"">";
?>