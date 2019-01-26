<?php                       //script de php


if(isset($_POST)){ //Si existe una peticion post, vamos a devolver el dato que recibimos.
    echo "Recived " . $_POST['username'];
}

?>