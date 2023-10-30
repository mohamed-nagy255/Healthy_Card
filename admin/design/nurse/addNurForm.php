<form method="post" action="functions/nurse/addNur.php">

  <div class="form-group">
    <label for="exampleInputEmail1">NUR.name</label>
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
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name="address" value="" class="form-control" id="exampleInputEmail1" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1"> Phone</label>
    <input type="text" name="phone" value="" class="form-control" id="exampleInputEmail1" required>
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
    <label for="exampleInputEmail1"> ID card</label>
    <input type="text" name="idcard" value="" class="form-control" id="exampleInputEmail1" required>
  </div>
  
  <input type="hidden" name="hospital_name_id" value="<?= $name['hospital_name_id']?>">

  <input type="hidden" name="priv" value="400">

<br>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
