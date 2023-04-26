<?php
include('db_connect.php');


function addProfessor($professorSSN, $professorName, $departmentID, $email, $phone, $salary, $DOB, $schedule) {
    global $conn;
    $sql = "INSERT INTO professors VALUES ('$professorSSN', '$professorName', '$departmentID', '$phone', '$email', '$salary','$DOB','$schedule')";
    if ($conn->query($sql) === TRUE) {
        return "New record created successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
