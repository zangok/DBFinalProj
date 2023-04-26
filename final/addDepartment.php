<?php
include('db_connect.php');


function addDepartment($departmentID, $departmentName, $buildingID, $headID) {
    global $conn;
    $sql = "INSERT INTO departments VALUES ('$departmentID', '$headID', '$departmentName', '$buildingID')";
    if ($conn->query($sql) === TRUE) {
        return "New record created successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
