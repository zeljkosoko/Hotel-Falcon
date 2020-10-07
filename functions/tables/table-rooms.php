<?php
require '../db-conn.php';

// Create table
$sql = "CREATE TABLE Sobe (
sobaID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL ,
naziv VARCHAR(30) NOT NULL,
opis TEXT NOT NULL,
tip VARCHAR(30) NOT NULL,
detaljnije TEXT,
dodaci VARCHAR(30) NOT NULL,
cena INT(6) NOT NULL,
slika1 TEXT,
slika2 TEXT,
slika3 TEXT,
slika4 TEXT
)";

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 