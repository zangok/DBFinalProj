<?php
include('db_connect.php');

function addRoom($roomID, $location, $buildingID, $type, $schedule, $professor) {
    global $conn;
    $sql = "INSERT INTO room VALUES ('$roomID',  '$location', '$buildingID', '$type',  '$schedule',  '$professor')";
    if ($conn->query($sql) === TRUE) {
        return "New record created successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
