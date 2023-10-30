
    <div class="card shadow mb-4">

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>

                      <th>Username</th>
                      <th>Report</th>
                      <th>Control</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>

                      <th>Username</th>
                      <th>Report</th>
                      <th>Control</th>
                    </tr>
                  </tfoot>
                  <tbody>

    <?php

        require_once "functions/connect.php";
        $hos  =  $_GET['id'];
        $selectDR = "SELECT * FROM report WHERE $hos = hospital_name_id ";
        $query    = $conn -> query($selectDR);
        $id       = 0;
        foreach ($query as $rep) {
    ?>
                    <tr>
                      <td><?= $rep['username'] ?></td>
                      <td><?= $rep['report'] ?></td>

                      <td>
                         <!-- Start delet button -->

                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#q<?= $rep['id']?>">
                             Delete
                          </button>

                          <div class="modal" id="q<?= $rep['id']?>" tabindex="-1" role="dialog">
                          <div class="modal-dialog" role="document">
                          <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Delete doctor</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
                          <div class="modal-body">
                              <p>Do You Want To Delete Report : <?= $rep['username']?></p>
                          </div>
                          <div class="modal-footer">
                             <a class="btn btn-danger" href="functions/report/delreport.php?id=<?= $rep['id']?>">Confirm</a>
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
