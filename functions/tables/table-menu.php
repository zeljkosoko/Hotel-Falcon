<?php 
    require '../db-conn.php';

    $sql = "CREATE TABLE Menu(
        itemID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
        categoryID INT(6) UNSIGNED,
        naziv VARCHAR(40) NOT NULL,
        sastojci TEXT NOT NULL,
        cena INT(6) NOT NULL,
        FOREIGN KEY (categoryID) REFERENCES menu_category(categoryID)
    )";

    if($conn->query($sql) === TRUE){
        echo "Table created successfully";
    } else {
        echo "DB connection error" . $conn->error;
    }

    $conn->close();
?>