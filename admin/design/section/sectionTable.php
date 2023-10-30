

<!-- DataTales Example -->
   <div class="card shadow mb-4">
          <a href="?action=add" class="btn btn-primary" >Add Specialty</a>
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Specialty Name</th>
                      <th>Specialty Manager</th>
                      <th>Hospital Name</th>
                      <th>Control</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Specialty Name</th>
                      <th>Specialty Manager</th>
                      <th>Hospital Name</th>
                      <th>Control</th>
                    </tr>
                  </tfoot>


                  <?php

                      require_once "functions/connect.php";
                      $hos  =  $_GET['id'];
                      $select = "SELECT * FROM section WHERE $hos = hospital_name_id";
                      $query  = $conn -> query($select);
                      $id   = 0;
                      foreach ($query as $sec) {

                  ?>

                  <tbody>
                    <tr>
                      <td><?= ++$id ?></td>
                      <td><?= $sec['section_name'] ?></td>
                      <td><?= $sec['section_manager'] ?></td>
                      <td><?php

                        $hospitalName   =   $sec['hospital_name_id'];
                        $select     =   "SELECT hospital_name FROM hospital WHERE id = $hospitalName";
                        $query  =   $conn -> query($select) -> fetch_assoc();
                        echo $query['hospital_name'];


                      ?></td>
                      <td>
                      <a class="btn btn-primary" href="?action=edite&id=<?= $sec['id']?>">Edite</a>
                      </td>
                    </tr>
                  </tbody>
                  <?php }; ?>
                </table>
              </div>
            </div>
          </div>