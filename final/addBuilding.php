<?php
include('db_connect.php');

function addBuilding($buildingID, $buildingName, $address, $room) {
    global $conn;
    $sql = "INSERT INTO buildings  VALUES ('$buildingID', '$buildingName', '$address', '$room')";
    if ($conn->query($sql) === TRUE) {
        return "New record created successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
