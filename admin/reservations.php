<?php

  session_start();
  if (!isset($_SESSION['login'])) {
    header('location: login.php');
    exit();
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Reservation Tables</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

<!-- Start include sidebar -->

<?php

include "includes/sidebar.php";

?>

<!-- End include sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

<!-- Start inclode Header -->

<?php

include "includes/header.php";

?>
<!-- End inclode Header -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Reservation Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
            <!-- <a target="_blank" href="https://datatables.net">official DataTables documentation</a> -->
            .</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>Username</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Specialty</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>id</th>
                      <th>Username</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Specialty</th>
                    </tr>
                  </tfoot>
                  <tbody>
<?php

$hos  =  $_GET['id'];
  // require_once "../functions/connect.php";
  $select_resev = "SELECT * FROM reservations WHERE $hos = hospital_name_id";
  $id = 0;
  $query = $conn -> query($select_resev);
  foreach ($query as $res) {

?>
                    <tr>
                      <td><?= ++$id ?></td>
                      <td><?= $res['pat_name'] ?></td>
                      <td><?= $res['date'] ?></td>
                      <td><?= $res['time'] ?></td>
                      <td>
                      <?php

                          $sec_id  =   $res['section_id'];
                          $selectSec   =   "SELECT section_name FROM section WHERE id = $sec_id";
                          $sec_name    =   $conn -> query($selectSec) -> fetch_assoc() ;
                          echo $sec_name['section_name'];

                      ?>   
                     </td>
                     
                    </tr>
<?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="functions/login/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

<!-- Start include footer -->

<?php

include "includes/footertable.php";

?>

<!-- End include footer -->
