<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css untuk main template -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Css untuk icon template -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <!--Jqurey Untuk membuat card horizontal dan responsive-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <title>Terumbuk Karang</title>
  </head>

  <body>
      <!-- Navbar -->
      <nav>
        <div class="logo">Terumbuk Karang</div>
        <label class="icon" for="btn">
          <i class="fas fa-bars"></i>
        </label>
        <input type="checkbox" id="btn" class="checkbox">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Donasi Sekarang</a></li>
          <li>
            <label for="btn-1" class="show">Fitur +</label>
            <a href="#">Fitur </a>
            <input type="checkbox" id="btn-1" class="checkbox">
            <ul>
              <li><a href="#">Form</a></li>
              <li><a href="#">Button</a></li>
              <li><a href="#">Page</a></li>
              <li>
                <label for="btn-2" class="show">More +</label>
                <a href="#">More
                  <i class="fas fa-plus"></i>
                </a>
                <input type="checkbox" id="btn-2" class="checkbox">
                <ul>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Bio</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Masuk</a></li>
          <li><a href="#">Daftar</a></li>
        </ul>
      </nav>
        
      <!-- Conten1 -->
      <div class="main-conten-1">
        <div class="content-1">
          <h2>Ini Halaman Map</h2>
        </div>
      </div>
      <!-- Conten2 -->
      <div class="main-content-2">
        <div class="content-2">
          <H2>Penjelasan Content 1</H2>
          <p>Ini halaman untuk menjelaskan dari content 1</p>
        </div>
      </div>

      <!-- Main -->
      <main>
        <div class="main">
          <div class="main-content">
            <h2>Area Terumbuk Karang</h2>
          </div>
          <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0309991516833!2d107.61311031449056!3d-6.8868903693035906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6f8aa08188b%3A0x632d24e6061e8903!2sUniversitas%20Komputer%20Indonesia%20(UNIKOM)!5e0!3m2!1sid!2sid!4v1598616959219!5m2!1sid!2sid" width="800" height="400" frameborder="0" style="border:0; border-radius: 10px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </main>

      <!-- Conten3 -->
      <div class="main-content-3">
        <div class="carousel owl-carousel">
          <div class="card">
            <div class="img"><img src="content/image_content/c1.jpg"></div>
            <div class="content-3">
              <div class="title">foto Pantai 1</div>
              <div class="sub-title">karang 1</div>
              <p class="p-content3">Penjelasan bla bla bla bla</p>
              <div class="btn-content-3">
                <button>Selengkapnya</button>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="img"><img src="content/image_content/c2.jpg"></div>
            <div class="content-3">
              <div class="title">foto Pantai 2</div>
              <div class="sub-title">karang 2</div>
              <p class="p-content3">Penjelasan bla bla bla bla</p>
              <div class="btn-content-3">
                <button>Selengkapnya</button>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="img"><img src="content/image_content/c3.jpg"></div>
            <div class="content-3">
              <div class="title">foto Pantai 3</div>
              <div class="sub-title">karang 3</div>
              <p class="p-content3">Penjelasan bla bla bla bla</p>
              <div class="btn-content-3">
                <button>Selengkapnya</button>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="img"><img src="content/image_content/c4.jpg"></div>
            <div class="content-3">
              <div class="title">foto 4</div>
              <div class="sub-title">karang 4</div>
              <p class="p-content3">Penjelasan bla bla bla bla</p>
              <div class="btn-content-3">
                <button>Selengkapnya</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <footer>
        <div class="footer-main">
          <!-- About Us -->
          <div class="left box">
            <h2>About us</h2>
            <div class="content">
              <p class="p-footer">asdasd<br>asdasd<p>
              <div class="social">
                <a href="https://facebook.com" style="color: #3b5998;"><i class="fab fa-facebook-square"></i></a>
                <a href="https://www.instagram.com/andrissahata/" style="color: #d62976;"><i class="fab fa-instagram-square"></i></a>
                <a href="https://www.youtube.com/" style="color: #cc181e;"><i class="fab fa-youtube"></i></i></a>
              </div>
            </div>
          </div>
          <!-- Address -->
          <div class="center box">
            <h2>Address</h2>
            <div class="content">
              <div class="place">
                <i class="fas fa-map-marker-alt"></i>
                <i class="text">Unknow</i>
              </div>
              <div class="phone">
                <i class="fas fa-phone-alt"></i>
                <i class="text">08123455667</i>
              </div>
              <div class="email">
                <i class="fas fa-envelope"></i>
                <i class="text">abc@example.com</i>
              </div>
            </div>
          </div>
          <!-- Contact Us -->
          <div class="right box">
            <h2>contact us</h2>
            <div class="content">
              <form action="#">
                <div class="email">
                  <div class="text">Email *</div>
                  <input type="email" required>
                </div>
                <div class="msg">
                  <div class="text">Message *</div>
                  <textarea rows="2" cols="25" required></textarea>
                </div>
                <div class="btn-msg">
                  <button type="submit">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="cr">
          <center>
            <i class="credit">Create By <a href="#">Team Penelitian Terumbuk Karang Unikom</a> | </i>
            <i class="far fa-copyright" >2020 All right reserved</i>
          </center>
        </div>
      </footer>

      <!-- Javascript Card Slideshow --> 
      <script type="text/javascript">
        $(".carousel").owlCarousel({
          margin: 5,
          loop: true,
          autoplay: true,
          autoplayTimeout: 2000,
          autoplayHoverPause: true,
          responsive:{
            0:{
              items: 1,
              nav: false
            },
            600:{
              items: 2,
              nav: false
            },
            1000:{
              items: 3,
              nav: false
            }
          }
        });
      </script>
  </body>
</html>