<?php

$id = $_POST['id'];
$password = $_POST['password'];

require_once "../connect.php";

if(!empty($password)){
    $pass = md5($password);
    $updatepass = "UPDATE drs SET password = '$pass' WHERE id = '$id'";
    $qpass = $conn -> query($updatepass);
}

// print_r($_POST);
// exit();

if ($qpass) {
    header ("location: ../../dr/profile-dr.php");
} else {
    echo $conn -> error;
}