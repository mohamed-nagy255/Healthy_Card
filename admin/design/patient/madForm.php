<?php

require_once "functions/connect.php";
// require_once "../../functions/connect.php";
// require dirname(_DIR_)."functions/connect.php";

$id  = $_GET['id'];
$select = "SELECT * FROM mad_pat WHERE pat_name_id = $id";
$query  = $conn -> query($select);
$mad    = $query -> fetch_assoc();

?>

<form method="post" action="functions/patient/addMad.php">
   
    <input type="hidden" name="pat_name_id" value="<?php echo $id ?>">
    <input type="hidden" name="id" value="?= $mad['id'] ?>">

  <div class="form-group">
    <label for="exampleInputEmail1">Add Medical</label>
    <input type="text" name="mad_name" value="" class="form-control" id="exampleInputEmail1"required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Times</label>
    <input type="text" name="times" value="" class="form-control" id="exampleInputEmail1"required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Add Note</label>
    <input type="text" name="note" value="" class="form-control" id="exampleInputEmail1"required>
  </div>
  
<br>

  <button type="submit" class="btn btn-primary">Submit</button>
  <br>
  <br>
  <br>
</form>


<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Medicine</th>
                      <th>Times</th>
                      <th>Note</th>
                      
                      <th>Control</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Medicine</th>
                      <th>Times</th>
                      <th>Note</th>
                      
                      <th>Control</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
<?php

$id  = $_GET['id'];
$select  = "SELECT * FROM mad_pat";
$query   = $conn -> query($select);
$mad    = $query -> fetch_assoc();

foreach ($query as $mads) {
        if ($id == $mads['pat_name_id'] ) {
?>
                      <td><?= $mads['mad_name'] ?></td>
                      <td><?= $mads['times'] ?></td>
                      <td><?= $mads['note'] ?></td>
                      <td>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#q<?= $mad['id']?>">
                Delete
                </button>
        
                <div class="modal" id="q<?= $mad['id']?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Delete Medicine</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <p>Do You Want To Delete : <?= $mad['mad_name']?></p>
                </div>
                <div class="modal-footer">
                <a class="btn btn-danger" href="functions/patient/delMad.php?id=<?= $mad['id']?>">Confirm</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </td>
                      
                    </tr>
<?php } }; ?>   
                  </tbody>
                </table>
              </div>
            </div>
          </div>