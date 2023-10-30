<?php

$rat  = $_POST['rating'];
$nam  = $_POST['username'];
$feed = $_POST['feedback'];

require_once "../connect.php";

$insert = "INSERT INTO reviews
(rating, username, feedback)
VALUE
('$rat' , '$nam' , '$feed')
";

$query = $conn -> query($insert);

if ($query) {
    header("location:../../contact-us.php");
} else {
    echo $conn -> error;
}