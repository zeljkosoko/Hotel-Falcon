<?php 
    require '../db-conn.php';

    $sql = "CREATE TABLE Devices(
        deviceID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
        naziv VARCHAR(30) NOT NULL,
        slika VARCHAR(60) NOT NULL
    )";

    if($conn->query($sql) === TRUE){
        echo "Table created successfully!";
    } else {
        echo "DB Connection error to create table" . $conn->error;
    }

    $conn->close();
?>