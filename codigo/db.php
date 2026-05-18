<?php
    //Variables para la conexión con la base de datos
    $host = $_ENV['APP_HOST'];
    $user = $_ENV['APP_USER'];
    $pass = $_ENV['APP_PASSWORD'];
    $miDb = $_ENV['APP_DB_NAME'];

    

    //Conexión con la base de datos
    $db = new mysqli($host, $user, $pass, $miDb);

    //Salta error si no se da conectado con la base de datos
    if ($db->connect_error) {
        die("Error de conexión: " . $db->connect_error);
    }
?>