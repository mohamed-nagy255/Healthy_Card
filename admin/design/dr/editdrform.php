<?php

    require "functions/connect.php";
    $id       = $_GET['id'];
    $selectdr = "SELECT * FROM drs WHERE id = $id";
    $query    = $conn -> query($selectdr);
    $DR       =$query -> fetch_assoc();

?>

<form method="post" action="functions/dr/editdr.php">

    <input type="hidden" name="id" value="<?= $DR['id'] ?>">
    <div class="form-group">
    <label for="exampleInputEmail1">age</label>
    <input type="text" name="age" value="<?= $DR['age'] ?>"  class="form-control" id="exampleInputEmail1"required>
  </div>
  
    <div class="form-group">
    <label for="exampleInputEmail1">address</label>
    <input type="text" name="address" value="<?= $DR['address'] ?>" class="form-control" id="exampleInputEmail1"required >
  </div>
 <div class="form-group">
    <label for="exampleInputEmail1"> phone</label>
    <input type="text" name="phone" value="<?= $DR['phone'] ?>" class="form-control" id="exampleInputEmail1" required>
  </div>
  
  
  
<br>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>