<?php

  require "functions/connect.php";
  $id     = $_GET['id'];
  $select = "SELECT * FROM patients WHERE id  = $id";
  $query  = $conn -> query($select);
  $pat    = $query -> fetch_assoc();

?>

<form method="post" action="functions/patient/editePat.php">

    <input Type="hidden" name="id"  value="<?= $pat['id'] ?>">
  
    <div class="form-group">
    <label for="exampleInputEmail1">Age</label>
    <input type="text" name="age" value="<?= $pat['age'] ?>" class="form-control" id="exampleInputEmail1"required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1"> phone</label>
    <input type="text" name="phone" value="<?= $pat['phone'] ?>" class="form-control" id="exampleInputEmail1"required >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">address</label>
    <input type="text" name="address" value="<?= $pat['address'] ?>" class="form-control" id="exampleInputEmail1"required >
  </div>


  <br>
  <br>
    

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio"  name="hospital_booking" id="inlineRadio5" value="0" required>
    <label class="form-check-label" for="inlineRadio5">Reserved</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="hospital_booking" id="inlineRadio6" value="1" required>
    <label class="form-check-label" for="inlineRadio6">Not Reserved</label>
  </div>

  

  <br>
  <br>


  <div class="form-group">
    <label for="exampleFormControlSelect1">Specialty</label>
    <select class="form-control" name="section_id" id="exampleFormControlSelect1">
    <?php
      require_once "functions/connect.php";
      $select_sec = "SELECT * FROM section";
      $query  = $conn -> query($select_sec);
      foreach ($query as $section) {
      ?>

      <option value="<?= $section['id'] ?>"><?= $section['section_name']; ?></option>

      <?php }; ?>
    </select>
  </div>

<br>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>