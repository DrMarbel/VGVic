<?php
    include "database.php";

    function getExistingGames(){
        global $db;
        $sql = "SELECT * FROM Games";
        $qry = $db->query($sql);
        $result = $qry->fetchAll();
        
        return $result;
    }

    function addNewGame($id, $name, $price, $img){
        global $db;
        $sql = "INSERT INTO Games (`ID`, `Title`, `Price`, `Console`, `Image`) VALUES ('$id', '$name', $price, '$img')";
        $db->query($sql);
    }

    getExistingGames();
?>