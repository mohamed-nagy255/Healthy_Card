<?php

require "functions/connect.php";

$id     =   $_GET['id'];
$select =   "SELECT * FROM managers WHERE id = $id";
$query  =   $conn -> query($select);
$manager    =   $query -> fetch_assoc();


?>

<form method="post" action="functions/manager/editemanager.php">
  
<input type="hidden" name="id" value="<?= $manager['id'] ?>">


    <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputEmail1"required>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1"> Phone</label>
    <input type="text" name="phone" value="<?= $manager['phone'] ?>" class="form-control" id="exampleInputEmail1" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name="address" value="<?= $manager['address'] ?>" class="form-control" id="exampleInputEmail1" required>
  </div>


<br>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>