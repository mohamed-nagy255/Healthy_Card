<?php

    require_once "functions/connect.php";
    $id   =  $_GET['id'];
    $select   =  "SELECT * FROM uner WHERE id = $id";
    $query   =  $conn -> query($select);
    $ouner   =  $query -> fetch_assoc();    

?>
<form method="post" action="functions/ouner/editeOuner.php">

<input type="hidden" name="id" value="<?= $ouner['id'] ?>">



    <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" name="password" value="" class="form-control" id="exampleInputEmail1"required>
  </div>
    
  

<br>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>