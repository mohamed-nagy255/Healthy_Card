<div class="card shadow mb-4">
<a href="?action=add" class="btn btn-primary" >Add Ouner</a>

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Username</th>
                      <th>Email Address</th>
                      <th>Control</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Username</th>
                      <th>Email Address</th>
                      <th>Control</th>
                    </tr>
                  </tfoot>
                  <tbody>
<?php

require_once "functions/connect.php";
$select    =    "SELECT * FROM  uner";
$query     =    $conn -> query($select);
$id     =   0;
foreach ($query as $uner) {

?>
                    <tr>                    
                      <td><?= ++$id ?></td>
                      <td><?= $uner['username'] ?></td>
                      <td><?= $uner['email'] ?></td>
                      <td>
                           <!-- Start edite button -->

                        <a class="btn btn-primary" href="?action=edite&id=<?= $uner['id']?>">Edite</a>

                        <!-- End edite button -->

                        <br>
                        <br>

                        <!-- Start delet button -->

                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#q<?= $uner['id']?>">
                            Delete
                        </button>

                        <div class="modal" id="q<?= $uner['id']?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title">Delete owner</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <p>Do You Want To Delete : <?= $uner['username']?></p>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-danger" href="functions/ouner/deletOuner.php?id=<?= $uner['id']?>">Confirm</a>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- End delet button -->
                      </td>
<?php }; ?>
                    </tr>
                    
                  </tbody>
                </table>