<?php

require_once "functions/connect.php";

$id  = $_GET['id'];
$select = "SELECT * FROM path_cases WHERE pat_name_id = $id";
$query  = $conn -> query($select);
$path   = $query -> fetch_assoc();

// $path = $_GET['path_case'];

// print_r($_GET);
// exit();

?>


<form method="post" action="functions/patient/editpath.php">
    <!-- <div class="form-group">
        <label for="exampleInputEmail1">Patient Name</label>
        <input type="text" name="username" value="?= $pat_name['username'] ?>" class="form-control" id="exampleInputEmail1"required>
    </div> -->

    <input type="hidden" name="pat_name_id" value="<?php echo $id; ?>">
    <input type="hidden" name="id" value="<?= $path['id']; ?>">

  <div class="form-group">
    <label for="exampleInputEmail1">pathological Cases</label>
    <input type="text" name="path_case" value="<?= $path['path_case']; ?>" class="form-control" id="exampleInputEmail1"required>
  </div>
  
<br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>