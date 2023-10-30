
<form method="post" action="functions/section/addSection.php">
  <div class="form-group">

    <label for="exampleInputEmail1">Specialty Name</label>
    <input type="text" name="section_name" value="" class="form-control" id="exampleInputEmail1"required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Specialty Manager</label>
    <input type="text" name="section_manager"  class="form-control" id="exampleInputEmail1"required>
  </div>
 
  <input type="hidden" name="hospital_name_id" value="<?= $name['hospital_name_id']?>">
  
<br>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>