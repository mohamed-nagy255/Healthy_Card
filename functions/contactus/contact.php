<?php

$name  = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$masse = $_POST['massege'];

require_once "../connect.php";

$insert = "INSERT INTO contact_us
(username, email, phone, massege)
VALUE
('$name' , '$email' , '$phone' , '$masse')
";

$query = $conn -> query($insert);

if ($query) {
    header("location:../../contact-us.php");
} else {
    echo $conn -> error;
}