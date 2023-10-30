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
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="./SASS/main.css" />
  </head>
  <body>
    <nav class="login-nav">
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
          <a href="./index.php">Home</a>
        </li>
        <li>
          <a href="./about-us.php">About us</a>
        </li>
        <!-- <li>
          <a href="#">services</a>
        </li> -->
        <li>
          <a href="./contact-us.php">contact us</a>
        </li>
      </ul>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>

    <section class="login">
      <div class="login-content row">
        <div class="image col-lg-6 col-sm-12">
          <img
            src="./IMAGE/login.jpg"
            alt=""
            class="animate__animated animate__fadeInLeft"
          />
        </div>
        <div class="login-form col-lg-6 col-sm-12">
        <form class="animate__animated animate__fadeInRight"  method="post" action="functions/login/login.php">
            <header>login</header>
            <div class="full-input">
              <input type="text" autocomplete="off" name="email" required />
              <label for="user-name"
                ><span class="content-label">Email Address</span></label
              >
            </div>
            <div class="full-input">
              <input type="password" autocomplete="off" name="password" required />
              <label for="Password"
                ><span class="content-label">Password</span></label
              >
            </div>
            <a href="#">forget Password?</a>

            <button class="btn btn-login" action="functions/login/login.php">login</button>
            <div class="media-connect">
              <div class="head-media">or sign up using</div>
              <div class="icon-media">
                <div class="icon facebook">
                  <i class="fa-brands fa-facebook-f"></i>
                </div>
                <div class="icon twitter">
                  <i class="fa-brands fa-twitter"></i>
                </div>
                <div class="icon google">
                  <i class="fa-brands fa-google"></i>
                </div>
              </div>
            </div>

            <div class="sign-up">
              <div class="head">or sign up using</div>
              <a href="#" class="sign-up-link">sign up</a>
            </div>
          </form>
        </div>
      </div>
    </section>

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
    <script src="./JS/main.js"></script>
  </body>
</html>
