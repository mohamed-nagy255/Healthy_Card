<?php

$page = 'index';
include "includes/nav.php";
// session_start();

?>

    <div class="main-header-page">
      <span class="overlay-header"></span>
      <div class="container">
        <div class="header-content">
          <div class="header-text">
            <h1>
              making health <br />
              care better together
            </h1>
            <p>
              also you creeping beast mulitiply fourth abundantly our itsel
              signs
              <br />
              bring our. wom form living. whoose dry you seasons divide given
              <br />
              gathering great in whoose you'll greater let living form beast<br />
              sinthete better together these place absolute right.
            </p>

            <a class="btn btn-main-header" href="./scan.html">scan qr</a>
          </div>
        </div>
      </div>
    </div>

    <section class="main-page">
      <article class="why-choose-us">
        <div class="container">
          <div class="row">
            <div class="info-ser col-lg-6 col-md-6 col-sm-12">
              <header><span>Why</span> Choose Us?</header>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
                id possimus repudiandae laboriosam pariatur eos facere suscipit
                ipsum libero voluptatibus ex soluta expedita reprehenderit
                numquam, consequuntur vitae fuga rem? Nam?
              </p>
              <div class="achievements">
                <ul>
                  <li><i class="fa-solid fa-qrcode"></i> Scan QR Code</li>
                  <li>
                    <i class="fa-solid fa-magnifying-glass"></i>Easy access for
                    people
                  </li>
                  <li>
                    <i class="fas fa-cogs"></i> Follow up with the doctor
                    periodically
                  </li>
                </ul>
              </div>
            </div>
            <div
              id="carouselExampleSlidesOnly"
              class="carousel slide col-lg-6 col-md-6 col-sm-12"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./IMAGE/why-us.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="./IMAGE/why-us2.webp"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="./IMAGE/why-us3.webp"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>

      <!-- // services  -->
<?php

if (isset($_SESSION['login'])) {
    echo ' <article class="services article">
        <span class="layout"></span>
        <div class="container">
          <header><span>our</span> services</header>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem
            consequatur iusto ad laudantium doloribus reiciendis facilis,
            cupiditate quas deleniti! Officia velit ipsa quos ipsam vitae sed
            doloribus perferendis, laboriosam quia.
          </p>

          <div class="services-links">
            <a href="./services.php?id=' . $name['hospital_name_id'] . '">go to services</a>
          </div>
        </div>
      </article>';
}
?>
      <article class="doctors">
        <div class="slider-person">
          <div class="splide-meet">
            <div class="container">
              <div class="splide__track">
                <ul class="splide__list">
<?php
require_once "functions/connect.php";
$select = "SELECT * FROM drs";
$query  = $conn -> query($select);
foreach ($query as $dr) {
  ?>  
                <li class="splide__slide">
                    <div class="title-slide"><?= $dr['username'] ?></div>
                    <p class="parg-slide">
<?php

$sec_id  =   $dr['section_id'];
$selectSec   =   "SELECT section_name FROM section WHERE id = $sec_id";
$sec_name    =   $conn -> query($selectSec) -> fetch_assoc() ;
echo $sec_name['section_name'];


?>    
                  </p>
                  </li>
  <?php }; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </article>

      <article class="counterUp">
        <span class="layout"></span>
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="box">
                <i class="fa-solid fa-user-group"></i>
                <div class="counter">725</div>
                <div class="counter-text">active member</div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="box">
                <i class="fa-solid fa-fire"></i>
                <div class="counter">508</div>
                <div class="counter-text">happy clients</div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="box">
                <i class="fa-solid fa-hospital-user"></i>
                <div class="counter">650</div>
                <div class="counter-text">patients</div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="box">
                <i class="fa-solid fa-user-doctor"></i>
                <div class="counter">150</div>
                <div class="counter-text">doctors</div>
              </div>
            </div>
          </div>
        </div>
      </article>

      <article class="testimonial article">
        <header><span>our</span> testimonial</header>

        <div class="splide-client">
          <div class="container">
            <div class="splide__track">
              <ul class="splide__list">
                <li class="splide__slide">
                  <div class="header-client active">
                    <img
                      src="./IMAGE/client-testimonials.png"
                      alt="this is man imges client"
                    />
                    <div class="title">mahmoud</div>
                    <div class="rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>

                  <p class="parg-client">
                    <i class="fas fa-quote-left"></i>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Praesentium, earum. Corporis aut, similique repellat
                    distinctio quo fugiat excepturi quibusdam, beatae ipsum in,
                    provident autem dolor optio? Hic, quisquam. Aperiam
                    veritatis ut possimus quidem ad unde ipsa ea sapiente
                    laborum mollitia?
                    <i class="fas fa-quote-right"></i>
                  </p>
                </li>

                <!-- // -->

                <li class="splide__slide">
                  <div class="header-client">
                    <img
                      src="./IMAGE/client-testimonials.png"
                      alt="this is man imges client"
                    />
                    <div class="title">mohamed</div>
                    <div class="rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>

                  <p class="parg-client">
                    <i class="fas fa-quote-left"></i>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Praesentium, earum. Corporis aut, similique repellat
                    distinctio quo fugiat excepturi quibusdam, beatae ipsum in,
                    provident autem dolor optio? Hic, quisquam. Aperiam
                    veritatis ut possimus quidem ad unde ipsa ea sapiente
                    laborum mollitia?
                    <i class="fas fa-quote-right"></i>
                  </p>
                </li>

                <!-- // -->

                <li class="splide__slide">
                  <div class="header-client">
                    <img
                      src="./IMAGE/client-testimonials.png"
                      alt="this is man imges client"
                    />
                    <div class="title">ahmed</div>
                    <div class="rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>

                  <p class="parg-client">
                    <i class="fas fa-quote-left"></i>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Praesentium, earum. Corporis aut, similique repellat
                    distinctio quo fugiat excepturi quibusdam, beatae ipsum in,
                    provident autem dolor optio? Hic, quisquam. Aperiam
                    veritatis ut possimus quidem ad unde ipsa ea sapiente
                    laborum mollitia?
                    <i class="fas fa-quote-right"></i>
                  </p>
                </li>
                <!-- // -->

                <li class="splide__slide">
                  <div class="header-client">
                    <img
                      src="./IMAGE/client-testimonials.png"
                      alt="this is man imges client"
                    />
                    <div class="title">ali</div>
                    <div class="rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>

                  <p class="parg-client">
                    <i class="fas fa-quote-left"></i>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Praesentium, earum. Corporis aut, similique repellat
                    distinctio quo fugiat excepturi quibusdam, beatae ipsum in,
                    provident autem dolor optio? Hic, quisquam. Aperiam
                    veritatis ut possimus quidem ad unde ipsa ea sapiente
                    laborum mollitia?
                    <i class="fas fa-quote-right"></i>
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </article>
      <article class="contact">
        <div class="container">
          <div class="contact-content">
            <div class="title">Healthy</div>
            <span>have any Queries? call us anytime</span>
            <a href="./contact-us.php">contact us</a>
          </div>
        </div>
      </article>
    </section>

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

    <div class="wraper scanner">
      <div class="popup">
        <header>
          <h5>Scanner</h5>
          <i class="fa-solid fa-xmark exit-popup"></i>
        </header>
        <div class="popup-details">
          <div style="width: 500px; height: 500px" id="reader"></div>
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

    <script src="./vendor/splide-3.2.1/dist/js/splide.min.js"></script>
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

    <script type="text/javascript" src="./JS/scanner.js"></script>
    <script src="./JS/popup.js"></script>
    <script src="./JS/main.js"></script>
    <script src="./JS/sliderHome.js"></script>
    <script src="./JS/query.js"></script>
  </body>
</html>
