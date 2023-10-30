

<div class="card shadow mb-4">
          <a href="?action=add" class="btn btn-primary" >Add Nurses</a>

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>NUR.name</th>
                      <th>Email Address</th>
                      <th>Age</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Gender</th>
                      <th>ID card</th>
                      <th>Hospital Name</th>
                      <th>Control</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>NUR.name</th>
                      <th>Email Address</th>
                      <th>Age</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Gender</th>
                      <th>ID card</th>
                      <th>Hospital Name</th>
                      <th>Control</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>

<?php

    require_once "functions/connect.php";
    $hos  =  $_GET['id'];
    $select = "SELECT * FROM nurses WHERE $hos = hospital_name_id";
    $query  = $conn -> query($select);
    $id     = 0;
    foreach ($query as $nur) {

?>

                      <td><?= ++$id ?></td>
                      <td><?= $nur['username'] ?></td>
                      <td><?= $nur['email'] ?></td>
                      <td><?= $nur['age'] ?></td>
                      <td><?= $nur['address'] ?></td>
                      <td><?= $nur['phone'] ?></td>
                      <td><?= $nur['gender'] == 0 ? 'Male' : 'Female' ?></td>
                      <td><?= $nur['idcard'] ?></td>
                      <td>
                      <?php

                        $hos_id  =   $nur['hospital_name_id'];
                        $selectHos   =   "SELECT hospital_name FROM hospital WHERE id = $hos_id";
                        $hos_name    =   $conn -> query($selectHos) -> fetch_assoc() ;
                        echo $hos_name['hospital_name'];


                        ?>  

                      </td>
                      <td>
                        <!-- Start edite button -->

                        <a class="btn btn-primary" href="?action=edite&id=<?= $nur['id']?>">Edite</a>

                        <!-- End edite button -->

                        
                        <!-- Start delet button -->

                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#q<?= $nur['id']?>">
                            Delete
                        </button>

                        <div class="modal" id="q<?= $nur['id']?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Delete Nuarse</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <p>Do You Want To Delete : <?= $nur['username']?></p>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-danger" href="functions/nurse/delNur.php?id=<?= $nur['id']?>">Confirm</a>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- End delet button -->
                      </td>
                    </tr>
<?php }; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>