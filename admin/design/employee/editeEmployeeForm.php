<?php

    require "functions/connect.php";
    $id     =   $_GET['id'];
    $select     =   "SELECT * FROM employees WHERE id = $id";
    $query      =   $conn -> query($select);
    $emp        =   $query -> fetch_assoc();

?>

<form method="post" action="functions/employee/editeEmployee.php">

<input type="hidden" name="id" value="<?= $emp['id'] ?>">


    <div class="form-group">
    <label for="exampleInputEmail1">Age</label>
    <input type="text" name="age" value="<?= $emp['age'] ?>" class="form-control" id="exampleInputEmail1"required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name="address" value="<?= $emp['address'] ?>" class="form-control" id="exampleInputEmail1" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1"> Phone</label>
    <input type="text" name="phone" value="<?= $emp['phone'] ?>" class="form-control" id="exampleInputEmail1" required>
  </div>


<br>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>