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
          <a href="../Services.php">Services</a>
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
              <a href="./profile-employee.php"
                >profile <i class="fa-solid fa-right-long"></i
              ></a>
              <a href="./edit-profile-employee.php" class="active"
                >edit profile <i class="fa-solid fa-right-long"></i
              ></a>
            </div>
          </div>
          <div class="profile-data edit-profile col-lg-9 col-md-12">
            <header class="title">edit profile data</header>
            <p class="main-parg">
              people on healthy card will get to know you with the info below
            </p>
<?php

require_once "../functions/connect.php";
$id     =   $_GET['id'];
$select     =   "SELECT * FROM employees WHERE id = $id";
$query      =   $conn -> query($select);
$emp        =   $query -> fetch_assoc();

?>
            <div class="user-info">
              <div class="main-data row">
                <div class="img-user col-sm-12">
                  <img
                    src="../IMAGE/client-testimonials.png"
                    alt=""
                    id="user_img"
                  />
 <form  method="post" action="../functions/employee/editEmployee.php">

                  <input
                    type="file"
                    title="search image"
                    id="file"
                    name="file"
                    onchange="show(this)"
                  />
                </div>
              </div>
              <input type="hidden" name="id" value="<?= $emp['id'] ?>">
              <div class="full-input">
                <label for="">your full name: *</label>
                <input name="username" type="text" value="<?= $emp['username'] ?>"/>
              </div>
              <div class="full-input">
                <label for="">age: *</label>
                <input name="age" type="text" value="<?= $emp['age'] ?>"/>
              </div>
              <div class="full-input">
                <label for="">address: *</label>
                <input name="address" type="text" value="<?= $emp['address'] ?>"/>
              </div>
              <div class="full-input">
                <label for="">phone: *</label>
                <input name="phone" type="text" value="<?= $emp['phone'] ?>"/>
              </div>
              <!-- <div class="full-input">
                <label for="">social status: *</label>
                <input type="text" />
              </div> -->
              <div class="submit">
                <button class="btn submit-edit">submit</button>
              </div>
            </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="../JS/upload-user-img.js"></script>
    <script src="../JS/main.js"></script>
  </body>
</html>
