<?php
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $db_name = "megabyte_login";

    $conn = new mysqli($servername, $username, $password, $db_name);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    echo "";
?>
