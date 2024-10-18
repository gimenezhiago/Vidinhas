<?php

    $dbHost = '127.0.0.1';
    $dbUsername = 'root';
    $dbPassword = 'gimenez2008@';
    $dbName = 'vidinhas';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if($conexao->connect_errno) {
        echo "Erooooo";
    } 
    else {
        echo "Conexão feita";
    }
?>