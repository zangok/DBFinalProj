<?php
include('db_connect.php');


function addSchedule($scheduleID, $class1, $class2, $class3, $class4, $class5, $class6, $class7) {
    global $conn;
    $sql = "INSERT INTO schedule VALUES ('$scheduleID', '$class1', '$class2', '$class3', '$class4', '$class5', '$class6', '$class7')";
    if ($conn->query($sql) === TRUE) {
        return "New record created successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
