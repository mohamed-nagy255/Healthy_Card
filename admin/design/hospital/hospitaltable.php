<div class="card shadow mb-4">
          <a href="?action=add" class="btn btn-primary" >Add Hospital</a>
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Hospital Name</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Emergency Number</th>
                      <th>control</th>
                    </tr>
                  </thead>
                  <tfoot>
                  <tr>
                      <th>ID</th>
                      <th>Hospital Name</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Emergency Number</th>
                      <th>control</th>
                    </tr>
                  </tfoot>
                  <tbody>
<?php

        require_once "functions/connect.php";
        $inserthos =   " SELECT * FROM hospital ";
        $query     =   $conn -> query($inserthos);
        $id        =   0;
        foreach ($query as $hos) {

?>
                    <tr>
                      <td><?= ++$id ?></td>
                      <td><?= $hos['hospital_name'] ?></td>
                      <td><?= $hos['address'] ?></td>
                      <td><?= $hos['phone'] ?></td>
                      <td><?= $hos['em_number'] ?></td>
                      <td>

                            <!-- Start edite button -->

                            <a class="btn btn-primary" href="?action=edite&id=<?= $hos['id']?>">Edite</a>

                            <!-- End edite button -->

                            
                            <!-- Start delet button -->

                            <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#q?= $hos['id']?">
                                Delete
                            </button>

                            <div class="modal" id="q?= $hos['id']?" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title">Delete Hospital</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <p>Do You Want To Delete : ?= $hos['hospital_name']?</p>
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-danger" href="functions/delhospital.php?id=?= $hos['id']?">Confirm</a>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                            <!-- End delet button -->

                      </td>
                    </tr>

<?php }; ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>