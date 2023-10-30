<form method="post" action="../functions/patient/addPatient.php" enctype = "multipart/form-data">

  <div class="form-group">
    <label for="exampleInputEmail1">Patient Name</label>
    <input type="text" name="username" value="" class="form-control" id="exampleInputEmail1"required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email Address</label>
    <input type="email" name="email" value="" class="form-control" id="exampleInputEmail1"required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" name="password" value="" class="form-control" id="exampleInputEmail1"required>
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Age</label>
    <input type="text" name="age"  class="form-control" id="exampleInputEmail1"required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1"> phone</label>
    <input type="text" name="phone" value="" class="form-control" id="exampleInputEmail1" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">address</label>
    <input type="text" name="address" value="" class="form-control" id="exampleInputEmail1" required>
  </div>

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" required>
    <label class="form-check-label" for="inlineRadio1">Male</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" required>
    <label class="form-check-label" for="inlineRadio2">Female</label>
  </div>

  <br>
  <br>

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio"  name="status" id="inlineRadio3" value="0" required>
    <label class="form-check-label" for="inlineRadio3">Married</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="status" id="inlineRadio4" value="1" required>
    <label class="form-check-label" for="inlineRadio4">Single</label>
  </div>

  <br>
  <br>

  <div class="form-group">
    <label for="exampleInputEmail1"> Blood Type </label>
    <input type="text" name="blood_type" value="" class="form-control" id="exampleInputEmail1" required>
  </div>


  <!-- <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio"  name="hospital_booking" id="inlineRadio5" value="0" required>
    <label class="form-check-label" for="inlineRadio5">Reserved</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="hospital_booking" id="inlineRadio6" value="1" required>
    <label class="form-check-label" for="inlineRadio6">Not Reserved</label>
  </div> -->

  <!-- <br>
  <br> -->
<?php
  $hos= $name ['hospital_name_id'];
?>

  <div class="form-group">
    <label for="exampleInputEmail1"> ID card</label>
    <input type="text" name="idcard" value="" class="form-control" id="exampleInputEmail1" required>
  </div>

  <input type="hidden" name="hospital_name_id" value="<?= $name['hospital_name_id']?>">
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Specialty</label>
    <select class="form-control" name="section_id" id="exampleFormControlSelect1">
    <?php
      require_once "functions/connect.php";
      $select_sec = "SELECT * FROM section WHERE hospital_name_id = $hos ";
      $query  = $conn -> query($select_sec);
      foreach ($query as $section) {
      ?>

      <option value="<?= $section['id'] ?>"><?= $section['section_name']; ?></option>

      <?php }; ?>
    </select>
  </div>
  <?php
     $select_qr = "SELECT * FROM patients ORDER BY id DESC LIMIT 1";
     $query_qr = $conn -> query($select_qr) -> fetch_assoc();;
     @$id_qr = $query_qr['id'];
    //  print_r($id_qr);
     @$qrId   = ++$id_qr;
    //  print_r($qrId);

    //  exit();

  ?>
          <input type="hidden" name="id_qr" value="http://localhost/healthy%20card/patient/profile-patient.php?id=<?php echo $qrId; ?>">
          <input type="hidden" name="qr_gn" value="<?php echo $qrId; ?>">
<input type="hidden" name="priv" value="600">

<br>
<br>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
