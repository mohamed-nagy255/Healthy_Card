<?php

  session_start();
  if (!isset($_SESSION['login'])) {
    // header('location: login.php');
    echo '<script>window.location.href="../login.php"</script>';
    exit();
  }

  $nam  = $_SESSION['name'];
  $id  = $_SESSION['login'];
  require_once "../functions/connect.php";
  $sel  = "SELECT * FROM $nam  WHERE  id = $id";
  $query = $conn -> query($sel);
  $name  = $query -> fetch_assoc();

  @$id_qr = $_GET['qr_gn'];
  @$id_pat = $_GET['id'];
  // @$na = $_GET['username'];
    // print_r($_GET);
    // exit();
  $select_patient = "SELECT * FROM patients WHERE qr_gn = '$id_qr' OR id = '$id_pat' ";
  $query_patient  = $conn -> query($select_patient);
  $patient        = $query_patient -> fetch_assoc();
  @$pat_id = $patient['id'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/459df87734.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="../SASS/main.css" />
  </head>

  <body class="changeColor">
    <nav>
      <div class="loading">
        <i class="fa-solid fa-heart"></i>
        <svg xmlns="http://www.w3.org/2000/svg" id="loader">
          <g id="back">
            <line x1="88.5" x2="237" y1="316" y2="317" />
            <line x1="237" x2="244" y1="317" y2="290" />
            <line x1="244" x2="261" y1="290" y2="403" />
            <line x1="261" x2="275" y1="403" y2="225" />
            <line x1="275" x2="285" y1="225" y2="335" />
            <line x1="296.5" x2="454.5" y1="317" y2="317" />
            <line x1="286" x2="295" y1="334" y2="317" stroke-dasharray="null" />
          </g>

          <g id="front">
            <line x1="88.5" x2="237" y1="316" y2="317" />
            <line x1="237" x2="244" y1="317" y2="290" />
            <line x1="244" x2="261" y1="290" y2="403" />
            <line x1="261" x2="275" y1="403" y2="225" />
            <line x1="275" x2="285" y1="225" y2="335" />
            <line x1="286" x2="295" y1="334" y2="317" />
            <line x1="296.5" x2="454.5" y1="317" y2="317" />
          </g>
        </svg>
      </div>
      <ul class="nav-links">
        <li>
          <a href="../index.php">Home</a>
        </li>
        <li>
          <a href="../about-us.php">About us</a>
        </li>
        <li>
          <a href="../services.php?id=<?php echo $name['hospital_name_id']; ?>&qr_gn=<?php echo $id_qr;?>">Services</a>
        </li>
        <li>
          <a href="../contact-us.php">contact us</a>
        </li>
      </ul>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>
    <div class="profile">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-12">
            <div class="links-profile">
            <?php
              if ($_SESSION['priv'] == 600){
            ?>
              <a href="./profile-patient.php" class="active"
                >profile <i class="fa-solid fa-right-long"></i
              ></a>
              <a href="./edit-profile-patient.php?id=<?= $name['id']?>"
                >edit profile <i class="fa-solid fa-right-long"></i
              ></a>
              <button class="btn change-password">change password</button>
              <?php }  ?>
            </div>
          </div>

          <div class="profile-data col-lg-9 col-md-12">
            <header class="title">personal data</header>
            <div class="user-info">
              <div class="main-data row">
                <div class="img-user col-lg-6 col-sm-12">
                  <img src="../IMAGE/client-testimonials.png" alt="" />
                  <div class="user-name"><?php echo @$patient['username']; ?></div>
                </div>
                <div class="qr col-lg-6 col-sm-12">
                  <img src="../functions/patient/<?php echo @$patient['qr']; ?>" alt="" />
                </div>
              </div>
              <div class="user-data">
                <div class="data">
                  <div class="name-property">full name</div>
                  <div class="value"><?php echo @$patient['username']; ?></div>
                </div>
                <div class="data">
                  <div class="name-property">national id</div>
                  <div class="value"><?php echo @$patient['idcard']; ?></div>
                </div>
                <div class="data">
                  <div class="name-property">age</div>
                  <div class="value"><?php echo @$patient['age']; ?></div>
                </div>
                <div class="data">
                  <div class="name-property">address</div>
                  <div class="value"><?php echo @$patient['address']; ?></div>
                </div>
                <div class="data">
                  <div class="name-property">gender</div>
                  <div class="value"><?php echo @$patient['gender'] == 0 ? 'Male' : 'Female'; ?></div>
                </div>
                <div class="data">
                  <div class="name-property">phone</div>
                  <div class="value"><?php echo @$patient['phone']; ?></div>
                </div>
                <div class="data">
                  <div class="name-property">bloode type</div>
                  <div class="value"><?php echo @$patient['blood_type']; ?></div>
                </div>
                <div class="data">
                  <div class="name-property">social status</div>
                  <div class="value"><?php echo @$patient['status'] == 0 ? 'Married' : 'Single'  ; ?></div>
                </div>
                <input Type="hidden" name="id" value="<?php echo @$pat_id; ?>">
              </div>
            </div>
            <?php
              $select_path = "SELECT * FROM path_cases WHERE pat_name_id = '$pat_id'";
              $path  = $conn -> query($select_path) -> fetch_assoc();
              @$path_case = $path['path_case'];
              // print_r($path_case);
              // exit();
            ?>

            <!-- // -->
            <header class="title">pathological case</header>
            <div class="user-info">
              <div class="user-data patient-pathological-data">
                <div class="data">
                  <div class="name-property">Description Of The Disease</div>
                  <div class="value"><?php echo @$path_case?></div>
                </div>
                <!-- // -->
                <div class="medicines">
                  <div class="table-medicines">
                    <table class="table table-striped medicines">
                      <tr>
                        <th>medicines name</th>
                        <th>times</th>
                        <th>notes</th>
                      </tr>
                      <?php
                          $select_med   = "SELECT * FROM mad_pat WHERE pat_name_id = '$pat_id'";
                          $query_med    = $conn -> query($select_med);
                          foreach ($query_med as $med) {
                        ?>
                      <tr>
                        <td><?php echo @$med['mad_name'];?></td>
                        <td><?php echo @$med['times'];?></td>
                        <td><?php echo @$med['note'];?></td>
                      </tr>
                      <?php } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="wraper change-password-popup">
      <div class="popup">
        <header>
          <h5>Change Password</h5>
          <i class="fa-solid fa-xmark exit-popup"></i>
        </header>
        <div class="popup-details">
        <form method="post" action="../functions/patient/passpat.php">
            <input type="hidden" name="id" value="<?= $name['id'] ?>">
            <!-- <div class="full-input-change">
              <label for="">current password: *</label>
              <input type="password" name="password"  placeholder="Enter Current password.." />
            </div> -->
            <div class="full-input-change">
              <label for="">New password: *</label>
              <input type="password" name="password"  placeholder="Enter New password.." />
            </div>
            <div class="full-input-change">
              <label for="">Re-type password: *</label>
              <input type="password" name="password"  placeholder="Re-type password.." />
            </div>
            <div class="submit">
              <button class="btn">submit</button>
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

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>

    <script src="../JS/popup.js"></script>
    <script src="../JS/main.js"></script>
  </body>
</html>
