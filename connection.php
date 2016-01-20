<?php

    require('data-connect.php');

    $mysqli = new mysqli($host, $user, $pwd, $db);

    if ($mysqli->connect_errno){
        echo "Fallo al conectar a MySQL: (".$mysqli->connect_errno.")".$mysqli->connect_error;
    }else{
        echo "Conectado a la base de datos con éxito <br/>";
    }
    echo $mysqli->host_info."\n";

?>
