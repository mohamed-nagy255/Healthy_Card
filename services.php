<?php

$page = 'serv';
include "includes/nav.php";

// session_start();
  if (!isset($_SESSION['login'])) {
    // header('location: login.php');
    echo '<script>window.location.href="login.php"</script>';
    exit();
  }

  $nam  = $_SESSION['name'];
  $id  = $_SESSION['login'];
  require_once "functions/connect.php";
  $sel  = "SELECT * FROM $nam  WHERE  id = $id";
  $query = $conn -> query($sel);
  $name  = $query -> fetch_assoc();

  $select_patient = "SELECT * FROM patients  ";
  $query_patient  = $conn -> query($select_patient);
  $patient        = $query_patient -> fetch_assoc();

  $patient_gn = $_GET['qr_gn'];
  // $hosp    = $_GET['hospital_name_id'];
  
  // print_r($_GET);
  // exit();

?>

  <section class="header-page services-header-img">
    <div class="overlay-header"></div>
    <div class="container">
      <div class="header-content">
        <h2>services</h2>
        <p>
          <a href="../index.php">Home</a>
          <i class="fas fa-chevron-right"></i> Services
        </p>
      </div>
    </div>
  </section>

  <div class="services padding-header">
    <div class="container">
      <div class="services-border">
        <header class="title">control</header>
        <div class="row">
          <ul class="nav nav-tabs col-lg-3 col-sm-12" id="myTab" role="tablist">
            <!-- all users -->

            <li>
              <a class="link-profile" href="./patient/profile-patient.php?id=<?php echo $name['id'];?>&qr_gn=<?php echo $patient_gn;?>">patient data</a>
            </li>

            <!-- dr -->
<?php

if ($_SESSION['priv'] == 300) {

?>
            <li class="nav-item col-lg-12" role="presentation">
              <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#pathological-case-dr"
                type="button" role="tab" aria-controls="pathological-case-dr" aria-selected="true">
                <i class="fa-solid fa-right-long"></i> pathological case
              </button>
            </li>
<?php }?>

            <!-- dr nurse empolyee -->
<?php

if ($_SESSION['priv'] == 500 || $_SESSION['priv'] == 400 || $_SESSION['priv'] == 300) {

?>
            <li class="nav-item  col-lg-12" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#report" type="button"
                role="tab" aria-controls="report" aria-selected="false">
                <i class="fa-solid fa-right-long"></i> report
              </button>
            </li>
<?php }?>  

            <!-- employee -->
<?php

      if ($_SESSION['priv'] == 500) {

?>
            <li class="nav-item  col-lg-12" role="presentation">
              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#reservations-employee"
                type="button" role="tab"  
                aria-selected="false">
                <i class="fa-solid fa-right-long"></i> reservations
              </button>
            </li>
            <li class="nav-item  col-lg-12" role="presentation">
              <button class="nav-link " id="contact-tab" data-bs-toggle="tab" data-bs-target="#patient-data"
                type="button" role="tab" 
                aria-controls="patient-data" aria-selected="false">
                <i class="fa-solid fa-right-long"></i> patient data
              </button>
            </li>
<?php } ?> 

            <!-- patient  -->
<?php

if ($_SESSION['priv'] == 600) {

?>        
            
            <li class="nav-item col-lg-12" role="presentation">
              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#reservations-patient"
                type="button" role="tab" aria-controls="reservations-patient" aria-selected="false">
                <i class="fa-solid fa-right-long"></i> reservations
              </button>
            </li>
            <!-- <li class="nav-item col-lg-12" role="presentation">
              <button class="nav-link " id="contact-tab" data-bs-toggle="tab"
                data-bs-target="#pathological-case-patient" type="button" role="tab"
                aria-controls="pathological-case-patient" aria-selected="false">
                <i class="fa-solid fa-right-long"></i> pathological case
              </button>
            </li> -->
<?php } ?> 

            <!-- nurse -->
<?php

if ($_SESSION['priv'] == 400) {

?>
            <li class="nav-item col-lg-12" role="presentation">
              <button class="nav-link " id="contact-tab" data-bs-toggle="tab" data-bs-target="#pathological-case-nurse"
                type="button" role="tab" aria-controls="pathological-case-nurse" aria-selected="false">
                <i class="fa-solid fa-right-long"></i> pathological case
              </button>
            </li>
<?php } ?> 

            <!-- pharmacist  -->
<?php

if ($_SESSION['priv'] == 700) {

?>
            <li class="nav-item col-lg-12" role="presentation">
              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#entering-medicines"
                type="button" role="tab" aria-controls="entering-medicines" aria-selected="false">
                <i class="fa-solid fa-right-long"></i> entering medicines
              </button>
            </li>
            <li class="nav-item col-lg-12" role="presentation">
              <button class="nav-link " id="contact-tab" data-bs-toggle="tab" data-bs-target="#take-out-medicines"
                type="button" role="tab" aria-controls="take-out-medicines" aria-selected="false">
                <i class="fa-solid fa-right-long"></i> take out medicines
              </button>
            </li>
<?php } ?> 
          </ul>
          <div class="tab-content col-lg-9 col-sm-12" id="myTabContent">
            <!-- dr -->
            <div class="tab-pane fade" id="pathological-case-dr" role="tabpanel"
              aria-labelledby="pathological-case-tab">
              <div class="services-item">
<?php
              $select_patient = "SELECT * FROM patients WHERE qr_gn = '$patient_gn' ";
              $query_patient  = $conn -> query($select_patient);
              $patient        = $query_patient -> fetch_assoc();
              @$pat_id         = $patient['id'];

              $select_path = "SELECT * FROM path_cases WHERE pat_name_id = '$pat_id'";
              $path  = $conn -> query($select_path) -> fetch_assoc();
              @$path_case = $path['path_case'];

               $select_med   = "SELECT * FROM mad_pat WHERE pat_name_id = '$pat_id'";
               $query_med    = $conn -> query($select_med);
?>
                <form method="post" action="functions/patient/editpath.php?qr_gn=<?php echo $patient_gn?>">
                  <div class="full-input-ser show-data">
                    <label for="">Full name</label>
                    <div class="value-personal"><?php echo @$patient['username']; ?></div>
                  </div>
                  
                  <input type="hidden" name="id" value="<?php echo $path['id']?>">
                  
                  <input type="hidden" name="pat_name_id" value="<?php echo $patient['id']?>">

                  <div class="full-input-ser full-width">
                    <label for="">Description of the disease</label>
                    <input type="text" name="path_case" value="<?php echo $path_case?>" placeholder="Description of the disease.." />
                  </div>
                  <div class="submit">
                    <button class="btn">submit</button>
                  </div>
                  <div class="medicines">
                    <div class="table-border">
                      <table class="table table-striped medicines">
                        <tr>
                          <th>medicines name</th>
                          <th>times</th>
                          <th>notes</th>
                          <th>control</th>
                        </tr>
                        <?php
                          foreach ($query_med as $med) {
                        ?>
                        <tr>
                          <td><?php echo @$med['mad_name'];?></td>
                          <td><?php echo @$med['times'];?></td>
                          <td><?php echo @$med['note'];?></td>
                          <td>
                            <div class="control">
                              <!-- <button class="btn delete">delete</button> -->
                            <!-- </div> -->
                                <button type="button" 
                                class="btn delete" 
                                data-bs-toggle="modal"
                                data-bs-target="#ma<?php echo @$med['id'] ?>">
                                delete</button>
                              </div>

                              <div class="modal fade" id="ma<?php echo @$med['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Delete Reservations : <?= @$med['mad_name']  ?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  
                                  <div class="modal-footer">
                                  <a type="button" 
                                  href="functions/patient/delmad.php?id=<?php echo @$med['id']?>&qr_gn=<?php echo $patient_gn?>"
                                  class="btn btn">yes</a>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">no</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <?php } ?>
                      </table>
                    </div>
                  </form>
                  <form method="post" action="functions/patient/addmed.php?qr_gn=<?php echo $patient_gn?>">
                    <div class="medicines-item row">
                      <div class="medicines-content col-lg-6 col-md-12">
                        <label for="">medicines name</label>
                        <input type="text" name="mad_name" placeholder="Enter medicines name.." />
                      </div>
                      <div class="medicines-content col-lg-6 col-md-12">
                        <label for="">times</label>
                        <input type="text" name="times" placeholder="Enter times.." />
                      </div>
                      <input type="hidden" name="pat_name_id" value="<?php echo $pat_id?>">
                      <div class="medicines-content full-width col-lg-12">
                        <label for="">note</label>
                        <input type="text" name="note" placeholder="Enter you note.." />
                      </div>
                      <div class="add-medicines">
                        <button class="btn add">add medicines</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- dr nurse employee -->
            <div class="tab-pane fade" id="report" role="tabpanel" aria-labelledby="report-tab">
              <div class="services-item">
                <form method="post" action="functions/report.php">
                  <div class="full-textarea">
                    <label for="">report</label>
                    <textarea name="report" id="" cols="30" rows="10" placeholder="Enter your Report.."></textarea>
                  </div>
                  <input type="hidden" name="username" value="<?= $name['username'] ?>">
                  <input type="hidden" name="hospital_name_id" value="<?= $name['hospital_name_id'] ?>">
                  <div class="submit">
                    <button class="btn">submit</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- employee  -->
            <div class="tab-pane fade" id="reservations-employee" role="tabpanel" aria-labelledby="reservations-tab">
              <div class="services-item">
                <form action="">
                  <input class="form-search me-2" type="search" placeholder="Search" aria-label="Search" />
                  <div class="table-border reservations">
                    <table class="table table-striped employee">
                      <tr>
                        <th>full name</th>
                        <th>departments</th>
                        <th>date</th>
                        <th>time</th>
                        <th>control</th>
                      </tr>
                      <input Type="hidden" name="id" value="<?= $name['hospital_name_id']?> ">

<?php 

    $hos  =  $_GET['id'];
    $select_res = "SELECT * FROM reservations WHERE '$hos' = hospital_name_id ";
    $query  = $conn -> query($select_res);
    foreach ($query as $res) {

?>

                      <tr>
                      <td><?= $res['pat_name'] ?></td>
                        <td>
                          <?php

                            $sec_id  =   $res['section_id'];
                            $selectSec   =   "SELECT section_name FROM section WHERE id = $sec_id";
                            $sec_name    =   $conn -> query($selectSec) -> fetch_assoc() ;
                            echo $sec_name['section_name'];

                          ?>
                        </td>
                        <td><?= $res['date'] ?></td>
                        <td><?= $res['time'] ?></td>
                        <td>
                          <div class="control">
                            <label class="full-input-check">done
                              <input type="checkbox" />
                              <span class="checkmark"></span>
                            </label>

                            <!-- delete moudel  -->
                            
                            <button type="button" 
                            class="btn delete" 
                            data-bs-toggle="modal"
                            data-bs-target="#de<?php echo $res['id'] ?>">
                            delete</button>
                          </div>

                          <div class="modal fade" id="de<?php echo $res['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Delete Reservations : <?= $res['pat_name']  ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              
                              <div class="modal-footer">
                              <a type="button" 
                              href="functions/employee/delresev.php?id=<?php echo $res['id']?>"
                              class="btn btn">yes</a>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">no</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- end moudel  -->
                        </td>
                      </tr>
<?php } ?>
                    </table>
                  </div>
                </form>
              </div>
            </div>
            <!-- employee -->
            <div class="tab-pane fade" id="patient-data" role="tabpanel" aria-labelledby="patient-data-tab">
              <div class="services-item col-lg-9">
                <form action="">
                  <input class="form-search me-2" type="search" placeholder="Search" aria-label="Search" />
                  <div class="table-border control-patient">
                    <table class="table table-striped employee">
                      <tr>
                        <th>ID</th>
                        <th>Full name</th>
                        <th>Email</th>
                        <th>national ID</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Bloode Type</th>
                        <th>Specialty</th>
                        <th>Social Status</th>
                        <th>QR code</th>
                        <th>Control</th>
                      </tr>     
<?php

$select_pat = "SELECT * FROM patients WHERE '$hos' = hospital_name_id";
$query  = $conn -> query($select_pat);
$id     = 0;
foreach ($query as $pat) {

?>
                    <tr>
                      <td><?= ++$id ?></td>
                      <td><?= $pat['username'] ?></td>
                      <td><?= $pat['email'] ?></td>
                      <td><?= $pat['idcard'] ?></td>
                      <td><?= $pat['age'] ?></td>
                      <td><?= $pat['address'] ?></td>
                      <td><?= $pat['phone'] ?></td>
                      <td>
                        <?= $pat['gender'] == 0 ? 'Male' : 'Female' ?>
                      </td>
                      <td><?= $pat['blood_type'] ?></td>
                      <td>
                      <?php

                      $sec_id  =   $pat['section_id'];
                      $selectSec   =   "SELECT section_name FROM section WHERE id = $sec_id";
                      $sec_name    =   $conn -> query($selectSec) -> fetch_assoc() ;
                      echo $sec_name['section_name'];

                      ?>
                      </td>
                      <td><?= $pat['status'] == 0 ? 'Married' : 'Single' ?></td>
                      <td>
                        <img style="width:100px;" src="functions/patient/<?= $pat['qr'] ?>" >
                      </td>
                      <td>

                          <!-- edite botton  -->

                          <button 
                            type="button" 
                            class="btn edit" 
                            data-id="<?php echo $pat['id'] ?>">
                            Edit</button>
                          </div>

                          
                        <!-- End button  -->

                          <!-- Delete modal  -->

                          <button type="button" 
                            class="btn delete" 
                            data-bs-toggle="modal"
                            data-bs-target="#d<?php echo $pat['id'] ?>">
                            delete</button>
                          </div>

                          <div class="modal fade" id="d<?php echo $pat['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Delete Reservations : <?= $pat['username']  ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              
                              <div class="modal-footer">
                              <a type="button" 
                              href="functions/employee/delpat.php?id=<?php echo $pat['id']?>"
                              class="btn btn">yes</a>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">no</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Modal  -->
                        </td>
                      </tr>
<?php } ?> 
                    </table>
                  </div>
                  <div class="submit add-patient">
                    <button class="btn btn-add-patient">add patient</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- patient  -->
            <div class="tab-pane fade" id="reservations-patient" role="tabpanel" aria-labelledby="reservations-tab">
              <div class="services-item flex-input">
                <form method="post" action="functions/patient/addresev.php">
                  <div class="full-input-ser">
                    <label for="">full name</label>
                    <input type="text" name="pat_name" value="<?php echo $name['username']?>" placeholder="Full Name.." />
                  </div>
                  <input type="hidden" name="hospital_name_id" value="<?php echo $name['hospital_name_id']?>">
                  <div class="full-input-ser full-width">
                    <label for="">Departments</label>
                    <select name="section_id" id="demo-2" placeholder="This is a placeholder">
                    <option>--Choose Departments--</option>
                      <?php
                        require_once "functions/connect.php";
                        $select_sec = "SELECT * FROM section WHERE hospital_name_id = '$hos'";
                        $query  = $conn -> query($select_sec);
                        foreach ($query as $section) {
                      ?>

                      <option value="<?= $section['id'] ?>"><?= $section['section_name']; ?></option>

                      <?php }; ?>
                    </select>
                  </div>
                  <div class="full-input-ser">
                    <label for="">date</label>
                    <input type="date" name="date" />
                  </div>
                  <div class="full-input-ser">
                    <label for="">time</label>
                    <input type="time" name="time" />
                  </div>
                  <div class="submit">
                    <button class="btn">sumbit</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- patient  -->

<?php
              $select_patient = "SELECT * FROM patients WHERE qr_gn = '$patient_gn' ";
              $query_patient  = $conn -> query($select_patient);
              @$patient        = $query_patient -> fetch_assoc();
              @$pat_id         = $patient['id'];

              $select_path = "SELECT * FROM path_cases WHERE pat_name_id = '$pat_id'";
              $path  = $conn -> query($select_path) -> fetch_assoc();
              @$path_case = $path['path_case'];

               $select_med   = "SELECT * FROM mad_pat WHERE pat_name_id = '$pat_id'";
               $query_med    = $conn -> query($select_med);
?>

            <div class="tab-pane fade " id="pathological-case-patient" role="tabpanel"
              aria-labelledby="patholocial-case-tab">
              <div class="services-item">
                <form action="">
                  <div class="full-input-ser show-data">
                    <label for="">Full name</label>
                    <div class="value-personal"><?php echo @$patient['username']?></div>
                  </div>

                  <div class="full-input-ser show-data full-width">
                    <label for="">Description of the disease</label>
                    <div class="value-personal">
                    <?php echo $path_case ?>
                    </div>
                  </div>
                  <div class="table-border">
                    <table class="table table-striped medicines">
                      <tr>
                        <th>medicines name</th>
                        <th>times</th>
                        <th>notes</th>
                      </tr>
                      <tr>
                        <td>medicines name</td>
                        <td>3 times</td>
                        <td>note note note note note</td>
                      </tr>
                    </table>
                  </div>
                </form>
              </div>
            </div>

            <!-- nurse  -->
            <div class="tab-pane fade " id="pathological-case-nurse" role="tabpanel"
              aria-labelledby="pathological-case-tab">
              <div class="services-item">
                <form action="">
                  <div class="full-input-ser show-data">
                    <label for="">Full name</label>
                    <div class="value-personal"><?php echo @$patient['username']?></div>
                  </div>

                  <div class="full-input-ser show-data full-width">
                    <label for="">Description of the disease</label>
                    <div class="value-personal">
                    <?php echo @$path_case ?>
                    </div>
                  </div>
                  <div class="table-border">
                    <table class="table table-striped medicines">
                      <tr>
                        <th>medicines name</th>
                        <th>times</th>
                        <th>notes</th>
                      </tr>
                      <?php
                      foreach ($query_med as $nur_med){
                      ?>
                      <tr>
                        <td><?php echo $nur_med['mad_name'] ?></td>
                        <td><?php echo $nur_med['times'] ?></td>
                        <td><?php echo $nur_med['note'] ?></td>
                      </tr>
                      <?php } ?>
                    </table>
                  </div>
                </form>
              </div>
            </div>

            <!-- pharmacist -->

            <div class="tab-pane fade " id="entering-medicines" role="tabpanel"
              aria-labelledby="entering-medicines-tab">
              <div class="services-item col-lg-8">
                  <input class="form-search me-2" type="search" placeholder="Search" aria-label="Search" />
                  <div class="table-border">
                    <table class="table table-striped entering-medicines">
                      <tr>
                        <th>medicines name</th>
                        <th>Quantity</th>
                        <th>control</th>
                      </tr>
<?php

    $selectphar = "SELECT * FROM pharmacy WHERE '$hos' = hospital_name_id ";
    $query  = $conn -> query($selectphar);
    foreach ($query as $phar) {                             

?>

                      <tr>
                        <td><?= $phar['med_name']?></td>
                        <td><?= $phar['number']?></td>
                        <td>
                        <a type="button" 
                            class="btn delete" 
                            data-bs-toggle="modal"
                            data-bs-target="#dm<?php echo $phar['id'] ?>">
                            delete</a>
                          </div>

                          <div class="modal fade" id="dm<?php echo $phar['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Delete medicine : <?= $phar['med_name']  ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              
                              <div class="modal-footer">
                              <a type="button" 
                              href="functions/pharmacist/delmed.php?id=<?php echo $phar['id']?>"
                              class="btn btn">yes</a>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">no</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        </td>
                      </tr>
<?php } ?>
                    </table>
                  </div>
                  <form method="post" action="functions/pharmacist/addMed.php">
                  <div class="medicines">
                    <div class="medicines-item row">
                      <div class="medicines-content col-lg-6 col-md-12">
                        <label for="">medicines name</label>
                        <input type="text" name="med_name" placeholder="Enter medicines name.." />
                      </div>
                      <input type="hidden" name="hospital_name_id" value="<?php echo $phar['hospital_name_id']?>">
                      <div class="medicines-content col-lg-6 col-md-12">
                        <label for="">Quantity</label>
                        <input type="text" name="number" placeholder="Enter Quantity.." />
                      </div>
                      <div class="add-medicines">
                        <button class="btn add">add medicines</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>


            <div class="tab-pane" id="take-out-medicines" role="tabpanel"
              aria-labelledby="take-out-medicines-tab">
              <div class="services-item col-lg-8">
                  <input class="form-search me-2" type="search" placeholder="Search" aria-label="Search" />
                  <div class="table-border">
                    <table class="table table-striped ">
                      <tr>
                        <th>medicines name</th>
                        <th>Quantity</th>
                      </tr>
                      <tr>
<?php

$selectphar = "SELECT * FROM pharmacy WHERE '$hos' = hospital_name_id ";
$query  = $conn -> query($selectphar);
foreach ($query as $phar) {                             

?>
                        <td><?= $phar['med_name']?></td>
                        <td><?= $phar['number']?></td>
                      </tr>
<?php } ?>
                    </table>
                  </div>
                  <form method="post" action="functions/pharmacist/outmed.php">

                  <div class="medicines">
                    <div class="medicines-item row">
                      <div class="medicines-content col-lg-6 col-md-12">
                        <label for="">medicines name</label>
                        <select name="med_name" id="demo-3" placeholder="This is a placeholder">
                        <option value="">--- Choose a Medicine ---</option>
                        <?php
                                    // require_once "functions/connect.php";
                                    $select_pha = "SELECT * FROM pharmacy WHERE $hos = hospital_name_id";
                                    $query  = $conn -> query($select_pha);
                                    foreach ($query as $pharm) {
                                    ?>
                                    
                                    <option value="<?= $pharm['id'] ?>"><?= $pharm['med_name'] ?></option>
                                    <?php }?>
                        </select>
                      </div>
                      <input type="hidden" name="hospital_name_id" value="<?php echo $phar['hospital_name_id'] ?>">
                      <div class="medicines-content col-lg-6 col-md-12">
                        <label for="">Quantity</label>
                        <input type="text" name="number" placeholder="Enter Quantity.." />
                      </div>
                      <div class="add-medicines">
                      <button class="btn add">add to output</button>
                      </div>
                      </form>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <header>about us</header>
            <p class="about-us-parg">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
              laborum doloribus ut quos similique consequatur facilis voluptate!
              Culpa aut odit impedit eveniet consectetur doloremque aliquam
              minus, fugiat necessitatibus delectus magnam.
            </p>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <header>useful links</header>
            <div class="link-web">
              <a href="./index.php"
                ><i class="fa-solid fa-arrow-right"></i> home</a
              >
            </div>
            <div class="link-web">
              <a href="./about-us.php"
                ><i class="fa-solid fa-arrow-right"></i> about us</a
              >
            </div>

            <div class="link-web">
              <a href="./services.php"
                ><i class="fa-solid fa-arrow-right"></i> services
              </a>
            </div>

            <div class="link-web">
              <a href="./contact-us.php"
                ><i class="fa-solid fa-arrow-right"></i> contact us</a
              >
            </div>
            <div class="link-web">
              <a href="./login.php"
                ><i class="fa-solid fa-arrow-right"></i> login</a
              >
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <header>contact us</header>
            <div class="footer-contact">
              <div>address: <span>mansora</span></div>
              <div>email: <span>mahmoud@.com</span></div>
              <div>phone: <span>+xxxx xxx xxxx</span></div>
              <div>fax: <span>-xxxx xxxx xxx</span></div>
              <div class="links-media">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-google"></i>
                <i class="fa-brands fa-linkedin-in"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <header>find your hospital</header>
            <div class="footer-location">
              <div class="location-hospital">
                <i class="fa-solid fa-location-dot"></i> location hospital
              </div>
              <div class="location-hospital">
                <i class="fa-solid fa-location-dot"></i> location hospital
              </div>
              <div class="location-hospital">
                <i class="fa-solid fa-location-dot"></i> location hospital
              </div>
              <div class="location-hospital">
                <i class="fa-solid fa-location-dot"></i> location hospital
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <div class="wraper edit-patient" >
      <div class="popup">
        <header>
          <h5>Edit Patient   
          <!-- <?php
              // $select_edit = "SELECT * FROM patients WHERE id = '$id_edit'";
              // $pat_edit = $conn -> query($select_edit) -> fetch_assoc();
              // echo $pat_edit['username'];
            ?> -->
          </h5>
          <i class="fa-solid fa-xmark exit-popup"></i>
        </header>
        <div class="popup-details">
        <form method="POST" 
         action="functions/employee/editPat.php">

          <input type="text" class="input-hidden"
          name="id" value="<?= $id_edit=$pat['id'] ?>">

          <div class="full-input-ser full-width" >
            <label for="">full name: *</label>
            <input type="text" name="username" value="
            <?php
              $select_edit = "SELECT username FROM patients WHERE id = '$id_edit'";
              $pat_edit = $conn -> query($select_edit) -> fetch_assoc();
              echo $pat_edit['username'];
            ?>" placeholder="Enter full name.." />
          </div>
          <div class="full-input-ser full-width">
            <label for="">age: *</label>
            <input type="text" name="age" value="<?= $pat['age'] ?>" placeholder="Enter age.." />
          </div>
          <div class="full-input-ser full-width">
            <label for="">Address: *</label>
            <input type="text" name="address" value="<?= $pat['address'] ?>" placeholder="Enter Address.." />
          </div>
          <div class="full-input-ser full-width">
            <label for="">Phone: *</label>
            <input type="hidde" name="phone" value="<?= $pat['phone'] ?>" placeholder="Enter Phone.." />
          </div>
         
          <div class="submit">
            <button class="btn submit-edit">Save</button>
          </div>
         </form>
        </div>
      </div>
    </div>

    <!-- <div class="wraper delete-popup delete-patient">
      <div class="popup">
        <header>
          <h5>Delete Patient</h5>
        </header>
        <div class="popup-details">
          <div class="control-delete">
            <button class="yes">yes</button>
            <button class="no exit-popup">no</button>
          </div>
        </div>
      </div>
    </div> -->

    <div class="wraper add-patient">
      <div class="popup">
        <header>
          <h5>Add New Patient</h5>
          <i class="fa-solid fa-xmark exit-popup"></i>
        </header>
        <div class="popup-details">
          <form method="post" action="functions/patient/addPatient.php" enctype = "multipart/form-data">
          <?php
            
          ?>
          <div class="full-input-ser full-width">
            <label for="">full name: *</label>
            <input type="text" name="username" placeholder="Enter full name.." />
          </div>
          <div class="full-input-ser full-width">
            <label for="">email address: *</label>
            <input type="text" name="email" placeholder="Enter email address.." />
          </div>
          <div class="full-input-ser full-width">
            <label for="">password: *</label>
            <input type="password" name="password" placeholder="Enter password.." />
          </div>
          <div class="checked-area">
            <div class="check-gender">
              <label class="full-input-check">male
                <input type="radio" name="gender" value="0" />
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="check-gender">
              <label class="full-input-check">female
                <input type="radio" name="gender" value="1" />
                <span class="checkmark"></span>
              </label>
            </div>
          </div>
          <div class="full-input-ser full-width">
            <label for="">national ID: *</label>
            <input type="text" name="idcard" placeholder="Enter National ID.." />
          </div>
          <div class="full-input-ser full-width">
            <label for="">age: *</label>
            <input type="text" name="age" placeholder="Enter age.." />
          </div>
          <div class="full-input-ser full-width">
            <label for="">Address: *</label>
            <input type="text" name="address" placeholder="Enter Address.." />
          </div>
          <div class="full-input-ser full-width">
            <label for="">Phone: *</label>
            <input type="text" name="phone" placeholder="Enter Phone.." />
          </div>
          <div class="checked-area">
            <div class="check-gender">
              <label class="full-input-check">Married
                <input type="radio" name="status" value="0" />
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="check-gender">
              <label class="full-input-check">Single
                <input type="radio" name="status" value="1" />
                <span class="checkmark"></span>
              </label>
            </div>
          </div>
          <div class="full-input-ser full-width">
            <label for="">Bloode Type : *</label>
            <input type="text" name="blood_type" placeholder="Enter Bloode Type.." />
          </div>
          <div class="full-input-ser full-width">
            <label for="">Select Specialty : *</label> 
             <select name="section_id" id="demo-4" placeholder="This is a placeholder">
               <option>--Choose Specialty--</option>
              <?php
                require_once "functions/connect.php";
                $select_sec = "SELECT * FROM section WHERE hospital_name_id = '$hos'";
                $query  = $conn -> query($select_sec);
                foreach ($query as $section) {
              ?>

               <option value="<?= $section['id'] ?>"><?= $section['section_name']; ?></option>

               <?php }; ?>
            </select>
          </div>
          
          <?php
            $select_qr = "SELECT * FROM patients";
            $query_qr = $conn -> query($select_qr) -> fetch_assoc();;
            @$id_qr = $pat['id'];
            @$qrId   = ++$id_qr;
          ?>
          <input type="hidden" name="id_qr" 
          value="http://localhost/healthy%20card/patient/profile-patient.php?qr_gn=<?php echo $qrId; ?>">
          <input type="hidden" name="hospital_name_id" value="<?php echo $name['hospital_name_id']?>">
          <input type="hidden" name="priv" value="600">
          <input type="hidden" name="qr_gn" value="<?php echo $qrId; ?>">
          <div class="submit">
            <input type="submit" class="btn submit-edit" value="Save Patient">
          </div>
                </form>
        </div>
      </div>
    </div>


    <div class="switch-color">
      <span class="gear"><i class="fa-solid fa-gear"></i></span>
      <div class="colors-content">
        <span class="color" data-color="#ff214f"></span>
        <span class="color" data-color="#01B2A0"></span>
        <span class="color" data-color="#FFB400"></span>
        <span class="color" data-color="#C41C1D"></span>
        <span class="color" data-color="#F34B0A"></span>
        <span class="color" data-color="#1ABC9C"></span>
        <span class="color" data-color="#8E44AD"></span>
        <span class="color" data-color="#A14C10"></span>
      </div>
    </div>
    <span id="btn-goToTop"><i class="fa-solid fa-arrow-up"></i></span>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"></script>
    <script src="./vendor/choices/public/assets/scripts/choices.min.js"></script>
    <script src="./JS/checkbox.js"></script>
    <script src="./JS/popup.js"></script>
    <script src="./JS/select.js"></script>
    <script src="./JS/main.js"></script>


</body>

</html>