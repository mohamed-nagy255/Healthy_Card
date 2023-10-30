<?php

$id = $_POST['id'];
$password = $_POST['password'];

require_once "../connect.php";

if(!empty($password)){
    $pass = md5($password);
    $updatepass = "UPDATE employees SET password = '$pass' WHERE id = '$id'";
    $qpass = $conn -> query($updatepass);
}

// print_r($_POST);
// exit();

if ($qpass) {
    header ("location: ../../employee/profile-employee.php");
} else {
    echo $conn -> error;
}