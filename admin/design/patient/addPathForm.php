<?php

require_once "functions/connect.php";


//  print_r ($_GET['id']);
//  exit();

$id  = $_GET['id'];

?>


<form method="post" action="functions/patient/addpath.php">
    <!-- <div class="form-group">
        <label for="exampleInputEmail1">Patient Name</label>
        <input type="text" name="username" value="?= $pat_name['username'] ?>" class="form-control" id="exampleInputEmail1"required>
    </div> -->

    <input type="text" name="pat_name_id" value="<?php echo $id; ?>">

  <div class="form-group">
    <label for="exampleInputEmail1">pathological Cases</label>
    <input type="text" name="path_case" value="" class="form-control" id="exampleInputEmail1"required>
  </div>
  
<br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>