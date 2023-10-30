<?php

        require "functions/connect.php";
        $id         =   $_GET['id'];
        $selecthos  =   "SELECT * FROM hospital WHERE id = $id";
        $query      =   $conn -> query($selecthos);
        $hos        =   $query -> fetch_assoc();

?>

<form method="post" action="functions/hospital/edithospital.php">
  <div class="form-group">

    <input type="hidden" name="id" value="<?= $hos['id'] ?>">
    <label for="exampleInputEmail1">Hospital Name</label>
    <input type="text" name="hospital_name" value="<?= $hos['hospital_name'] ?>" class="form-control" id="exampleInputEmail1"required>
  </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name="address" value="<?= $hos['address'] ?>" class="form-control" id="exampleInputEmail1" required>
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" value="<?= $hos['phone'] ?>" class="form-control" id="exampleInputEmail1" required>
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Emergency Number</label>
    <input type="text" name="em_number" value="<?= $hos['em_number'] ?>" class="form-control" id="exampleInputEmail1" required>
  </div>
 
<br>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>