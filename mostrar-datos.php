<?php

    // Llamada al fichero connection.php, que es el que contiene los datos de conexión
    require('connection.php');

    // Instanciamos el objeto $mysqli con los datos que nos vienen de connection.php
    $mysqli = new mysqli($host, $user, $pwd, $db);

    /* Comprobamos mediante el procedimiento connect_errno si tiene algún error de conexión, y si es así,
     *  nos lo muestra por pantalla
     */
    if ($mysqli->connect_errno){
        echo "Fallo al conectar a MySQL: ".$mysqli->connect_error;
    }

    $result = $mysqli->query("SELECT * FROM PIEZA");
    $row = $result->fetch_assoc();
    echo $row['MODELO'];




?>
