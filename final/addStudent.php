<?php
include('db_connect.php');


function addStudentData($studentID, $studentEmail, $studentName, $studentPhone, $studentSchedule, $studentAddress, $studentDOB, $studentYear) {
    global $conn;
    $sql = "INSERT INTO students VALUES ('$studentID', '$studentName', '$studentEmail', '$studentPhone', '$studentSchedule', '$studentAddress', '$studentDOB', '$studentYear')";
    if ($conn->query($sql) === TRUE) {
        return "New record created successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
