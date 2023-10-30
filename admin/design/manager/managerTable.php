<div class="card shadow mb-4">
<a href="?action=add" class="btn btn-primary" >Add manager</a>

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
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Hospital Name</th>
                      <th>Control</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Username</th>
                      <th>Email Address</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Hospital Name</th>
                      <th>Control</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>

<?php

    require_once "functions/connect.php";
    $select    =    "SELECT * FROM  managers";
    $query     =    $conn -> query($select);
    $id     =   0;
    foreach ($query as $manager) {

?>
                    
                      <td><?= ++$id ?></td>
                      <td><?= $manager['username'] ?></td>
                      <td><?= $manager['email'] ?></td>
                      <td><?= $manager['phone'] ?></td>
                      <td><?= $manager['address'] ?></td>
                      <td>
                      <?php

                        $hos_id  =   $manager['hospital_name_id'];
                        $selectHos   =   "SELECT hospital_name FROM hospital WHERE id = $hos_id";
                        $hos_name    =   $conn -> query($selectHos) -> fetch_assoc() ;
                        echo $hos_name['hospital_name'];


                        ?>  
                      </td>
                      <td>
                           <!-- Start edite button -->

                        <a class="btn btn-primary" href="?action=edite&id=<?= $manager['id']?>">Edite</a>

                        <!-- End edite button -->

                        <br>
                        <br>

                        <!-- Start delet button -->

                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#q<?= $manager['id']?>">
                            Delete
                        </button>

                        <div class="modal" id="q<?= $manager['id']?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title">Delete Patient</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <p>Do You Want To Delete : <?= $manager['username']?></p>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-danger" href="functions/manager/deletManager.php?id=<?= $manager['id']?>">Confirm</a>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- End delet button -->
                      </td>
                    </tr>
                  </tbody>
                  <?php }; ?>
                </table>
              </div>
            </div>
          </div>