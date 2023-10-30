
<form method="post" action="functions/dr/adddr.php">

  <div class="form-group">
    <label for="exampleInputEmail1">DR.name</label>
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
    <label for="exampleInputEmail1">age</label>
    <input type="text" name="age"  class="form-control" id="exampleInputEmail1"required>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" required>
    <label class="form-check-label" for="inlineRadio1">Male</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" required>
    <label class="form-check-label" for="inlineRadio2">Female</label>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">address</label>
    <input type="text" name="address" value="" class="form-control" id="exampleInputEmail1" required>
  </div>
 <div class="form-group">
    <label for="exampleInputEmail1"> phone</label>
    <input type="text" name="phone" value="" class="form-control" id="exampleInputEmail1" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> id card</label>
    <input type="text" name="idcard" value="" class="form-control" id="exampleInputEmail1"required >
  </div>
  <!-- <div class="form-group">
    <label for="exampleFormControlSelect1">Hospital Name</label>
    <select class="form-control" name="hospital_name_id" id="exampleFormControlSelect1">
      <?php
      // require_once "functions/connect.php";
      // $select_hos = "SELECT * FROM hospital";
      // $query  = $conn -> query($select_hos);
      // foreach ($query as $hospital) {
      ?>

      <option value="<?= $hospital
      // ['id'] 
      ?>"><?= $hospital
      // ['hospital_name']
      ; ?></option>

      <?php
      //  }
      ; ?>
    </select>
  </div> -->
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

<input type="hidden" name="priv" value="300">
<input type="hidden" name="hospital_name_id" value="<?= $name['hospital_name_id']?>">

<br>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>