
<div class="card shadow mb-4">
          
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      
                      <th>Patient Name</th>
                      <th>pathological cases</th>
                      <th>control</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Patient Name</th>
                      <th>pathological cases</th>
                      <th>control</th>
                      
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
<?php

  require_once "functions/connect.php";
  $id     = $_GET['id'];
  $select = "SELECT * FROM path_cases WHERE pat_name_id = $id";
  $query  = $conn -> query($select);
  foreach ($query as $path) {

?>
                      <td>
                     <?php

                      $pat_id  =   $path['pat_name_id'];
                      $selectpat   =   "SELECT username FROM patients WHERE id = $pat_id";
                      $pat_name    =   $conn -> query($selectpat) -> fetch_assoc();
                      echo $pat_name['username'];   

                      ?>
                     </td>
                      <td><?= $path['path_case'] ?></td>
                      
                      <td>
                        <!-- Start edite button -->

                        <a class="btn btn-primary" href="?action=editepath&id=<?= $path['pat_name_id']?>">Edite</a>

                        <!-- End edite button -->

                        
                    </tr>
<?php }; ?>   
                  </tbody>
                </table>
              </div>
            </div>
          </div>