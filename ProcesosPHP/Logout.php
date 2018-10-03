<?php

/**
 * @author JOSE_CHAC
 * @copyright 3182016 11:31
 * @project ProcesosPHP
 */
 
session_start();

//$url = $_POST['url'];

if($_SESSION['nombreU']){
    session_destroy();
    echo "<script>location.href='/Index.html'</script>";
}
else{
    echo "<script>location.href='/Index.html'</script>";
}

?>