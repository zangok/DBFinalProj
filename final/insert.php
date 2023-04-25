<?php

// MySQL server configuration
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the functions to interact with the database
function addClassData($classNumber, $className, $classSubject, $classMajor, $classRoom, $classProfId, $classTime, $classDept) {
    global $conn;
    $sql = "INSERT INTO classes VALUES ('$classNumber', '$className', '$classSubject', '$classMajor', '$classRoom', '$classProfId', '$classTime', '$classDept')";
    if ($conn->query($sql) === TRUE) {
        return "New record created successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

function addFacultyData($facultyName, $facultyEmail, $facultySSN, $facultyDept, $facultyPhone, $facultySalary, $facultyDOB) {
    global $conn;
    $sql = "INSERT INTO Faculty VALUES ('$facultySSN', '$facultyName', '$facultyDept', '$facultyPhone','$facultyEmail',  '$facultySalary', '$facultyDOB')";
    if ($conn->query($sql) === TRUE) {
        return "New record created successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

function addStudentData($studentID, $studentEmail, $studentName, $studentPhone, $studentSchedule, $studentAddress, $studentDOB, $studentYear) {
    global $conn;
    $sql = "INSERT INTO students VALUES ('$studentID', '$studentName', '$studentEmail', '$studentPhone', '$studentSchedule', '$studentAddress', '$studentDOB', '$studentYear')";
    if ($conn->query($sql) === TRUE) {
        return "New record created successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}
function addSchedule($scheduleID, $class1, $class2, $class3, $class4, $class5, $class6, $class7) {
    global $conn;
    $sql = "INSERT INTO schedule VALUES ('$scheduleID', '$class1', '$class2', '$class3', '$class4', '$class5', '$class6', '$class7')";
    if ($conn->query($sql) === TRUE) {
        return "New record created successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}
function addProfessor($professorSSN, $professorName, $departmentID, $email, $phone, $salary, $DOB, $schedule) {
    global $conn;
    $sql = "INSERT INTO professors VALUES ('$professorSSN', '$professorName', '$departmentID', '$phone', '$email', '$salary','$DOB','$schedule')";
    if ($conn->query($sql) === TRUE) {
        return "New record created successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}
function addDepartment($departmentID, $departmentName, $buildingID, $headID) {
    global $conn;
    $sql = "INSERT INTO departments VALUES ('$departmentID', '$headID', '$departmentName', '$buildingID')";
    if ($conn->query($sql) === TRUE) {
        return "New record created successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}
function addBuilding($buildingID, $buildingName, $address, $room) {
    global $conn;
    $sql = "INSERT INTO buildings  VALUES ('$buildingID', '$buildingName', '$address', '$room')";
    if ($conn->query($sql) === TRUE) {
        return "New record created successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}
function addRoom($roomID, $location, $buildingID, $type, $schedule, $professor) {
    global $conn;
    $sql = "INSERT INTO room VALUES ('$roomID',  '$location', '$buildingID', '$type',  '$schedule',  '$professor')";
    if ($conn->query($sql) === TRUE) {
        return "New record created successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}