
    <div class="card shadow mb-4">
    <a href="?action=add&id=<?=$name['hospital_name_id']?>" class="btn btn-primary">Add Doctor</a>

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>DR.Name</th>
                      <th>Email Address</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>ID card</th>
                      <th>Hospital Name</th>
                      <th>Specialty</th>
                      <th>Control</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>DR.Name</th>
                      <th>Email Address</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>ID card</th>
                      <th>Hospital Name</th>
                      <th>Specialty</th>
                      <th>Control</th>
                    </tr>
                  </tfoot>
                  <input Type="hidden" name="id" value="<?= $name['hospital_name_id']?> ">

                  <tbody>

    <?php

        require_once "functions/connect.php";
        $hos  =  $_GET['id'];
        $selectDR = "SELECT * FROM drs WHERE $hos = hospital_name_id";
        $query    = $conn -> query($selectDR);
        $id       = 0;
        foreach ($query as $DR) {
    ?>
                    <tr>
                      <td><?= ++$id ?></td>
                      <td><?= $DR['username'] ?></td>
                      <td><?= $DR['email'] ?></td>
                      <td><?= $DR['age'] ?></td>
                      <td><?= $DR['gender'] == 0 ? 'Male' : 'Famele' ?></td>
                      <td><?= $DR['address'] ?></td>
                      <td><?= $DR['phone'] ?></td>
                      <td><?= $DR['idcard'] ?></td>
                      <td><?php

                      $hos_id  =   $DR['hospital_name_id'];
                      $selectHos   =   "SELECT hospital_name FROM hospital WHERE id = $hos_id";
                      $hos_name    =   $conn -> query($selectHos) -> fetch_assoc() ;
                      echo $hos_name['hospital_name'];


                      ?></td>
                      <td><?php

                      $sec_id  =   $DR['section_id'];
                      $selectSec   =   "SELECT section_name FROM section WHERE id = $sec_id";
                      $sec_name    =   $conn -> query($selectSec) -> fetch_assoc() ;
                      echo $sec_name['section_name'];


                      ?></td>
                      <td>
                         <!-- Start edite button -->

                         <a class="btn btn-primary" href="?action=edite&id=<?= $DR['id']?>">Edite</a>

                         <!-- End edite button -->

                         <br>
                         <br>
                          
                         <!-- Start delet button -->

                         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#q<?= $DR['id']?>">
                            Delete
                        </button>

                        <div class="modal" id="q<?= $DR['id']?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title">Delete Dr</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <p>Do You Want To Delete : <?= $DR['username']?></p>
                        </div>
                          <div class="modal-footer">
                             <a class="btn btn-danger" href="functions/dr/deldr.php?id=<?= $DR['id']?>">Confirm</a>
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <!-- End delet button -->

                          </div>
                          </div>
                          </div>
                          </div>
                       </td>
                    </tr>
        <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          