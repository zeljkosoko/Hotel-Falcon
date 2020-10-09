<?php 
    require '../db-conn.php';

    $sql = "CREATE TABLE Menu_Category(
        categoryID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
        naziv VARCHAR(30) NOT NULL,
        opis TEXT NOT NULL
    )";

    if($conn->query($sql) === TRUE){
        echo "Table created successfully";
    } else {
        echo "DB connection error" . $conn->error;
    }

    $conn->close();
?>