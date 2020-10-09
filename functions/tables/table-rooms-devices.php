<?php 
    require '../db-conn.php';

    $sql = "CREATE TABLE RoomsDevices(
        roomDeviceID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
        sobaID INT(6) UNSIGNED,
        deviceID INT(6) UNSIGNED,
        FOREIGN KEY (sobaID) REFERENCES sobe(sobaID),
        FOREIGN KEY (deviceID) REFERENCES devices(deviceID)
    )";

    if($conn->query($sql) === TRUE){
        echo "Table created successfully";
    } else {
        echo "DB connection error" . $conn->error;
    }

    $conn->close();
?>