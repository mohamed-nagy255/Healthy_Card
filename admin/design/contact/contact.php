
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Massege</th>
                      <th>Control</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Massege</th>
                      <th>Control</th>
                    </tr>
                  </tfoot>
                  <tbody>

    <?php

        require_once "functions/connect.php";
        $select = "SELECT * FROM contact_us";
        $query    = $conn -> query($select);
        $id       = 0;
        foreach ($query as $con) {
    ?>
                    <tr>
                      <td><?= ++$id ?></td>
                      <td><?= $con['username'] ?></td>
                      <td><?= $con['email'] ?></td>
                      <td><?= $con['phone'] ?></td>
                      <td><?= $con['massege'] ?></td>
                      <td>
                         <!-- Start delet button -->

                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#q<?php echo $con['id']?>">
                             Delete
                          </button>

                          <div class="modal" id="q" tabindex="-1" role="dialog">
                          <div class="modal-dialog" role="document">
                          <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Delete </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
                          <div class="modal-body">
                              <p>Do You Want To Delete : <?= $con['username']?></p>
                          </div>
                          <div class="modal-footer">
                             <a class="btn btn-danger" href="functions/contact/decon.php?id=<?php echo $con['id']?>">Confirm</a>
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
          