
<div class="card shadow mb-4">
          <a href="?action=add" class="btn btn-primary" >Add Patient</a>
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Patient Name</th>
                      <th>Email Address</th>
                      <th>Age</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Gender</th>
                      <th>Status</th>
                      <th>ID card</th>
                      <th>Blood Type</th>
                      <th>Pathological Cases</th>
                      <th>Patient Medication</th>
                      <th>Specialty</th>
                      <th>Hospital Name</th>
                      <th>QR</th>
                      <th>Control</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Patient Name</th>
                      <th>Email Address</th>
                      <th>Age</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Gender</th>
                      <th>Status</th>
                      <th>ID card</th>
                      <th>Blood Type</th>
                      <th>Pathological Cases</th>
                      <th>Patient Medication</th>
                      <th>Specialty</th>
                      <th>Hospital Name</th>
                      <th>QR</th>
                      <th>Control</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
<?php
  

  require_once "functions/connect.php";
  $hos  =  $_GET['id'];
  $select = "SELECT * FROM patients WHERE $hos = hospital_name_id";
  $query  = $conn -> query($select);
  $id     = 0;
  foreach ($query as $pat) {

?>
                      <td><?= ++$id ?></td>
                      <td><?= $pat['username'] ?></td>
                      <td><?= $pat['email'] ?></td>
                      <td><?= $pat['age'] ?></td>
                      <td><?= $pat['phone'] ?></td>
                      <td><?= $pat['address'] ?></td>
                      <td><?= $pat['gender'] == 0 ? 'Male' : 'Female' ?></td>
                      <td><?= $pat['status'] == 0 ? 'Married' : 'Single' ?></td>
                      <td><?= $pat['idcard'] ?></td>
                      <td><?= $pat['blood_type'] ?></td>
                      <td>
                      <?php

                        $selectpath = "SELECT path_case FROM path_cases where pat_name_id =" .  $pat['id'];
                        $query      = $conn -> query($selectpath);
                        $path   = $query -> fetch_assoc();
                        if (empty($path['path_case'])) {


                          echo "<a class='btn btn-primary'"." href="."?action=addpath&id=". $pat["id"]. "> Add pathological </a>";
                        
                        }
                      ?>
                      <br>
                      <br>
                      <a class="btn btn-primary" href="?action=showpath&id=<?= $pat['id']?>">show pathological</a>
                      </td>
                      <td>
                      <a class="btn btn-primary" href="?action=mad&id=<?= $pat['id']?>">Medical</a>
                     </td>
                      <td>
                        <?php

                      $sec_id  =   $pat['section_id'];
                      $selectSec   =   "SELECT section_name FROM section WHERE id = $sec_id";
                      $sec_name    =   $conn -> query($selectSec) -> fetch_assoc() ;
                      echo $sec_name['section_name'];


                      ?></td>
                      <td><?php

                      $hos_id  =   $pat['hospital_name_id'];
                      $selectHos   =   "SELECT hospital_name FROM hospital WHERE id = $hos_id";
                      $hos_name    =   $conn -> query($selectHos) -> fetch_assoc() ;
                      echo $hos_name['hospital_name'];


                      ?></td>
                      <td>
                        <img style="width:100px;" src="../functions/patient/<?= $pat['qr'] ?>" >
                      </td>
                      <td>
                        <!-- Start edite button -->

                        <a class="btn btn-primary" href="?action=edite&id=<?= $pat['id']?>">Edite</a>

                        <!-- End edite button -->

                        <br>
                        <br>

                        <!-- Start delet button -->

                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#q<?= $pat['id']?>">
                            Delete
                        </button>

                        <div class="modal" id="q<?= $pat['id']?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Delete Patient</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <p>Do You Want To Delete : <?= $pat['username']?></p>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-danger" href="functions/patient/delPat.php?id=<?= $pat['id']?>">Confirm</a>
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