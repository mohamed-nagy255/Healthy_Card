<form method="post" action="functions/manager/addmanager.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Manager Name</label>
    <input type="text" name="username" value="" class="form-control" id="exampleInputEmail1"required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email Address</label>
    <input type="email" name="email" value="" class="form-control" id="exampleInputEmail1"required>
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="text" name="password"  class="form-control" id="exampleInputEmail1"required>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1"> Phone</label>
    <input type="text" name="phone" value="" class="form-control" id="exampleInputEmail1" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name="address" value="" class="form-control" id="exampleInputEmail1" required>
  </div>


  <div class="form-group">
    <label for="exampleFormControlSelect1">Hospital Name</label>
    <select class="form-control" name="hospital_name_id" id="exampleFormControlSelect1">
      <?php
      require_once "functions/connect.php";
      $select_hos = "SELECT * FROM hospital";
      $query  = $conn -> query($select_hos);
      foreach ($query as $hospital) {
      ?>

      <option value="<?= $hospital['id'] ?>"><?= $hospital['hospital_name']; ?></option>

      <?php }; ?>
    </select>

    <input type="hidden" name="priv" value="200">

  </div>

<br>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>