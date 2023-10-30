<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="auther" content="Mahmoud Reda" />
    <title>Healthy cloud</title>
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

    <link
      rel="stylesheet"
      href="./vendor/splide-3.2.1/dist/css/splide.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
   
    <script src="./JS/html5-qr.min.js"></script>
    <link rel="stylesheet" href="./SASS/main.css" />
    <link rel="stylesheet" href="./vendor/choices/public/assets/styles/choices.min.css" />
  </head>
  <body>
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
          <a href="./index.php" class="<?= $page == 'index' ? 'active' : '' ?>">Home</a>
        </li>
        <li>
          <a href="./about-us.php" class="<?= $page == 'about' ? 'active' : '' ?>">About us</a>
        </li>
<?php

  

if(isset($_SESSION['login'])){

  $nam  = $_SESSION['name'];
  $id  = $_SESSION['login'];  
  require_once "functions/connect.php";
  $sel  = "SELECT * FROM $nam  WHERE  id = $id";
  $query = $conn -> query($sel);
  $name  = $query -> fetch_assoc();

  
      echo '
      <li>
        <a href="./services.php?id=' . $name['hospital_name_id'] . '"class="'; 
      echo $page == 'serv' ? 'active' : ''; 
      echo' " '; 
        echo ' >services</a>
      </li>';
}
?>
        <!-- <li>
          <a href="./services.php" class=" ?= $page == 'serv' ? 'active' : '' ?>" >services</a>
        </li> -->
        <li>
          <a href="./contact-us.php" class="<?= $page == 'contact' ? 'active' : '' ?>">contact us</a>
        </li>
<?php        

// require_once "functions/connect.php";
// session_start();
  if (!isset($_SESSION['login'])) {

    

       echo '<li class="login">';
         echo '<a href="./login.php">login</a>';
        echo '</li>';
   

  } 
  ?>
        
      </ul>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
<?php

if (isset($_SESSION['login'])) {
  
  

  echo '<span class="mr-2 d-none d-lg-inline text-gray-600 big" style="color: var(--mainColor);" >' . $name['username'] . '</span>';

     echo '<div class="btn-group login-patient">
        <img
          src="./IMAGE/client-testimonials.png"
          alt=""
          data-bs-toggle="dropdown"
          aria-expanded="false"
        />
        <ul class="dropdown-menu">';
        if ($_SESSION['priv'] == 600) {
          ?>
<!-- 
        //   <li>
        //     <a class="dropdown-item" href="./patient/edit-profile-patient.html"
        //       ><i class="fa-solid fa-gear"></i> account setting</a
        //     >
        //   </li> -->
          <li>
            <a class="dropdown-item" href="./patient/profile-patient.php?id=<?php echo $name['id'];?>">
            <i class="fa-solid fa-user"></i> my profile patient</a>
          </li>
          <?php
        } elseif ($_SESSION['priv'] == 400) {
          echo'<li>
            <a class="dropdown-item" href="./nurse/profile-nurse.php"
              ><i class="fa-solid fa-user"></i> my profile nurse</a
            >
          </li>';
        } elseif ($_SESSION['priv'] == 500) {
          echo'<li>
            <a class="dropdown-item" href="./employee/profile-employee.php"
              ><i class="fa-solid fa-user"></i> my profile employee
            </a>
          </li>';
        } elseif ($_SESSION['priv'] == 300) {
          echo'<li>
            <a class="dropdown-item" href="./dr/profile-dr.php"
              ><i class="fa-solid fa-user"></i> my profile dr</a
            >
          </li>';
        } elseif ($_SESSION['priv'] == 700) {
            echo'<li>';
            echo'<a class="dropdown-item" href="./Pharmacist/profile-pharmacist.php"';
            echo'  ><i class="fa-solid fa-user"></i> my profile Pharmacist';
            echo'</a>';
            echo'</li>';
          }
            echo'<li><hr class="dropdown-divider" /></li>';
            echo'<li>';
             echo' <a class="dropdown-item log-out" href="functions/login/logout.php"';
               echo' ><i class="fa-solid fa-power-off"></i> log out</a';
              echo'>';
            echo'</li>';
          echo'</ul>';
      }
      ?>  
      </div>
      <input type="hidden" name="id" value="<?= $name['hospital_name_id']?>">
    </nav>
    