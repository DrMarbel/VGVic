<?php
    $dsn = "mysql:host=local;dbname=vgviktor";
    $username = "root";
    $password = "";

    try{
        $db = new PDO($dsn, $username, $password);
    } catch(PDOException $e){
        echo("Couldn't connect.")
    }
?>