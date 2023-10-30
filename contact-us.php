<?php

$page = 'contact';
include "includes/nav.php";

?>

    <!-- START HEADER SECTION  -->
    <section class="header-page contact-header-img">
      <div class="overlay-header"></div>
      <div class="container">
        <div class="header-content">
          <h2>contact us</h2>
          <p>
            <a href="./index.php">Home</a>
            <i class="fas fa-chevron-right"></i> Contact Us
          </p>
        </div>
      </div>
    </section>

    <section class="contact-us padding-header">
      <div class="container">
        <header class="header-contact"><span>contact</span> us</header>
        <p class="prag-contact">
          Wait for us so that we can contact you as soon as possible
        </p>

        <div class="row">
          <div class="contact-content col-lg-8 col-sm-12">
            <form method="post" action="functions/contactus/contact.php">
              <input type="text" name="username" placeholder="Name" data-placeholder="Name" />
              <input
                type="email"
                name="email"
                placeholder="Email"
                data-placeholder="Email"
              />
              <input
                style="width:87%;"
                type="text"
                name="phone"
                placeholder="Number"
                data-placeholder="Number"
              />
              <textarea
                name="massege"
                id=""
                cols="30"
                rows="10"
                placeholder="Write massage"
                data-placeholder="Write massage"
              ></textarea>
              <button type="submit" class="btn">send message</button>
            </form>
          </div>

          <div class="contact-content col-lg-4 col-sm-12">
            <header class="contact-info">Contact Info</header>
            <div class="contact-items">
              <div class="icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="contact-text">
                <h4>office address</h4>
                <p>El Mansoura</p>
              </div>
            </div>

            <div class="contact-items">
              <div class="icon">
                <i class="fas fa-phone-alt"></i>
              </div>
              <div class="contact-text">
                <h4>phone number</h4>
                <p>Office: <a href="#">XXXX XXXX XXX</a></p>
                <p>Mobile: <a href="#">+xxx xxxx xxxx</a></p>
              </div>
            </div>

            <div class="contact-items">
              <div class="icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="contact-text">
                <h4>email address</h4>
                <p><a href="#">info@mahmoud.com</a></p>
                <p><a href="#">http://mahmoud.com</a></p>
              </div>
            </div>
          </div>
        </div>
<?php
    if($_SESSION['priv'] == 600) {
      $nam  = $_SESSION['name'];
      $id  = $_SESSION['login'];
      require_once "functions/connect.php";
      $sel  = "SELECT * FROM $nam  WHERE  id = $id";
      $query = $conn -> query($sel);
      $name  = $query -> fetch_assoc();
?>
        <article class="reviews">
          <header>add your reviews</header>
          <div class="reviews-content">
            <form method="post" action="functions/contactus/rating.php">
              <div class="rate-stars">
                <label for="">rating</label>
                <div class="star-widget">
                  <input type="radio" value="5" name="rating" id="rate-5" data-num="5" />
                  <label for="rate-5" class="fa fa-star"></label>
                  <input type="radio" value="4" name="rating" id="rate-4" data-num="4" />
                  <label for="rate-4" class="fa fa-star"></label>
                  <input type="radio" value="3" name="rating" id="rate-3" data-num="3" />
                  <label for="rate-3" class="fa fa-star"></label>
                  <input type="radio" value="2" name="rating" id="rate-2" data-num="2" />
                  <label for="rate-2" class="fa fa-star"></label>
                  <input type="radio" value="1" name="rating" id="rate-1" data-num="1" />
                  <label for="rate-1" class="fa fa-star"></label>
                </div>
                <input type="text" id="input-hidden-stars" />
              </div>
              <input type="hidden" name="username" value="<?php echo $name['username']?>" />
              <label for="">write your feedback</label>
              <textarea
                name="feedback"
                id=""
                cols="10"
                rows="10"
                placeholder="Write your feedback"
              ></textarea>
              <button class="btn submit-review">submit</button>
            </form>
          </div>
        </article>
      </div>
    </section>
<?php }?>
    <!-- END CONTACT US SERCTION  -->

    <!-- GOOGLE MAP AREA  -->
    <div class="google-map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6092.597078182575!2d31.376167923607944!3d31.016368216505644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79c473b2055b1%3A0xe683c9e51dbbf6a4!2sEgypt%20Higher%20Institute%20of%20Engineering%20and%20Technology%20in%20Mansoura!5e0!3m2!1sen!2seg!4v1606137992425!5m2!1sen!2seg"
        width="600"
        height="450"
        frameborder="0"
        style="border: 0"
        allowfullscreen=""
        aria-hidden="false"
        tabindex="0"
      ></iframe>
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

    <script src="./JS/ratingStars.js"></script>
    <script src="./JS/main.js"></script>
  </body>
</html>
