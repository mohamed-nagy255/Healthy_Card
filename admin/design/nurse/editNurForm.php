<?php

require "functions/connect.php";

$id     =   $_GET['id'];
$select =   "SELECT * FROM nurses WHERE id = $id";
$query  =   $conn -> query($select);
$nur    =   $query -> fetch_assoc();


?>


<form method="post" action="functions/nurse/editNur.php">
  <div class="form-group">

  <input type="hidden" name="id" value="<?= $nur['id'] ?>">

    <div class="form-group">
    <label for="exampleInputEmail1">Age</label>
    <input type="text" name="age" value="<?= $nur['age'] ?>"  class="form-control" id="exampleInputEmail1"required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name="address" value="<?= $nur['address'] ?>" class="form-control" id="exampleInputEmail1" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1"> Phone</label>
    <input type="text" name="phone" value="<?= $nur['phone'] ?>" class="form-control" id="exampleInputEmail1" required>
  </div>

<br>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>