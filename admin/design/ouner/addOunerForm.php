<form method="post" action="functions/ouner/addOuner.php">


  <div class="form-group">
    <label for="exampleInputEmail1">Ouner Name</label>
    <input type="text" name="username" value="" class="form-control" id="exampleInputEmail1"required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email Address</label>
    <input type="email" name="email" value="" class="form-control" id="exampleInputEmail1"required>
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputEmail1"required>
  </div>
    

  <input type="hidden" name="priv" value="100">

  

<br>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>