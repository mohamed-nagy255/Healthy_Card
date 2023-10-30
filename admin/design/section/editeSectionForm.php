<?php

    require "functions/connect.php";
    $id     =   $_GET['id'];
    $select    =    "SELECT * FROM section WHERE id = $id";
    $query  =   $conn -> query($select);
    $sec    =   $query -> fetch_assoc();

    

    ?>

<form method="post" action="functions/section/editeSection.php">
  <div class="form-group">

  <input type="hidden" name="id" value="<?= $sec['id'] ?>">


    <label for="exampleInputEmail1">Specialty Name</label>
    <input type="text" name="section_name" value="<?= $sec['section_name'] ?>" class="form-control" id="exampleInputEmail1"required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Specialty Manager</label>
    <input type="text" name="section_manager" value="<?= $sec['section_manager'] ?>" class="form-control" id="exampleInputEmail1"required>
  </div>
 
  
<br>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>