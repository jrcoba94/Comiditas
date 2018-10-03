<?php
/**
*JOSE_CHAC
*24082016 11:58
*/

session_start();

if($_SESSION['nombreU']){
    session_destroy();
    echo "<script>location.href='/Index.html'</script>";
}
else{
    echo "<script>location.href='/Index.html'</script>";
}

?>