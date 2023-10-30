<?php

 require_once "connect.php";
 $select_manger = "SELECT * FROM managers";
 $query  =  $conn -> query($select_manger); 
 $man  =  $query -> fetch_assoc();