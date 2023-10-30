<!-- DataTales Example -->
<div class="card shadow mb-4">
<a href="?action=add&id=<?=$name['hospital_name_id']?>" class="btn btn-primary">Add Employee</a>
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Employee Name</th>
                      <th>Email Address</th>
                      <th>Age</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Gender</th>
                      <th>Status</th>
                      <th>ID Card</th>
                      <th>Hospital Name</th>
                      <!-- <th>image</th> -->
                      <th>Control</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Employee Name</th>
                      <th>Email Address</th>
                      <th>Age</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Gender</th>
                      <th>Status</th>
                      <th>ID Card</th>
                      <th>Hospital Name</th>
                      <!-- <th>image</th> -->
                      <th>Control</th>
                    </tr>
                  </tfoot>
                  <tbody>

<?php

        require_once "functions/connect.php";
        $hos  =  $_GET['id'];
        $select     =   "SELECT * FROM employees WHERE $hos = hospital_name_id";
        $query      =   $conn -> query($select);
        $id     =   0;
        foreach ($query as $emp) {

?>

                    <tr>
                      <th><?= ++$id ?></th>
                      <th><?= $emp['username'] ?></th>
                      <th><?= $emp['email'] ?></th>
                      <th><?= $emp['age'] ?></th>
                      <th><?= $emp['address'] ?></th>
                      <th><?= $emp['phone'] ?></th>
                      <th><?= $emp['gender'] == 0 ? 'Male' : 'Famele' ?></th>
                      <th><?= $emp['status'] == 0 ? 'Married' : 'Single' ?></th>
                      <th><?= $emp['idcard'] ?></th>
                      <th>
                      <?php

                        $hos_id      =   $emp['hospital_name_id'];
                        $selectHos   =   "SELECT hospital_name FROM hospital WHERE id = $hos_id";
                        $hos_name    =   $conn -> query($selectHos) -> fetch_assoc() ;
                        echo $hos_name['hospital_name'];


                        ?>

                     </th>
                     <!-- <td>
                        <img style="width:100px;" src="images/?= $emp['img'] ?>" >
                      </td> -->
                      <th>
                         <!-- Start edite button -->

                         <a class="btn btn-primary" href="?action=edite&id=<?= $emp['id']?>">Edite</a>

                         <!-- End edite button -->

                         <br>
                         <br>

                         <!-- Start delet button -->

                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#q<?= $emp['id']?>">
                             Delete
                          </button>

                          <div class="modal" id="q<?= $emp['id']?>" tabindex="-1" role="dialog">
                          <div class="modal-dialog" role="document">
                          <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Delete Employee</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
                          <div class="modal-body">
                              <p>Do You Want To Delete : <?= $emp['username']?></p>
                          </div>
                          <div class="modal-footer">
                             <a class="btn btn-danger" href="functions/employee/delEmployee.php?id=<?= $emp['id']?>">Confirm</a>
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <!-- End delet button -->
                      </th>
                    </tr>
<?php }; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
