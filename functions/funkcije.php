<?php
require 'db-conn.php';

function getRooms(){
    global $conn;
    $sql = "SELECT * FROM sobe";
    
    //return $conn->query($sql);
    return mysqli_query($conn, $sql);
}

function getRoom($id){
    global $conn;

    $sql = "SELECT * FROM sobe WHERE sobaID=$id";
    //mysqli_query fja izvrsava sql query pri konekciji sa mysql bazom
    return mysqli_query($conn, $sql); //vracamo mysqli array sa odgovarajucim recordom
}

?>