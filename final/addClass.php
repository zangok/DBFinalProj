<?php
include('db_connect.php');

function addClassData($classNumber, $className, $classSubject, $classMajor, $classRoom, $classProfId, $classTime, $classDept) {
    global $conn;
    $sql = "INSERT INTO classes VALUES ('$classNumber', '$className', '$classSubject', '$classMajor', '$classRoom', '$classProfId', '$classTime', '$classDept')";
    if ($conn->query($sql) === TRUE) {
        return "New record created successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
