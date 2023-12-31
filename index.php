<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kopi Asmara</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">

    <!-- feather ikon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!--my style-->
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Kopi Asmara</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="about.html">About Us</a>
        <a href="menu.html">Our Menu</a>
        <a href="contact.html">Contact</a>
      </div>

      <div class="navbar-extra">

      <!--Navbar Search-->
      <div class="search-box">
      <div class="search-icon">
        <i class data-feather="search"></i>
      </div>
      <div class="search-input">
        <input type="text" class="input" placeholder="Search..." id="menuSearchInput">
      </div>
      <div class="shopping-cart"></div>
      <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      <a href="signup.php" id="login"><i data-feather="log-in"></i></a>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Login Section Start -->
    <section class="login" id="login">
        <a href="login.php" class="cta"></a>
    </section>
    <!-- Login Section End -->

    <!-- Hero Section Start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Mari Nikmati Secangkir Kopi</h1>
        <p>Selamat Datang di Kopi Asmara</p>
        <p>
          Nikmati Kelezatan Kopi Berkualitas Tinggi dan Suasana yang Nyaman!
        </p>
        <a href="menu.html" class="cta">Order Now</a>
      </main>
    </section>

    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="about">
      <h2><span>About </span>Us</h2>

      <div class="row">
        <div class="about-video">
          <video src="Kopi Asmara.mp4" alt="About Us" loop autoplay muted></video>
        </div>
        <div class="content">
          <h3>Kenapa Harus Kopi Asmara?</h3>
          <p>
            **Kopi Asmara dibuat dari bahan-bahan terbaik dipadukan dengan
            penyajian yang kreatif serta didukung oleh suasana hangat yang
            diciptakan Kopi Asmara untuk Anda
          </p>
          <p>
            **Jangan ragu untuk bertanya kepada barista kami tentang rekomendasi
            kopi terbaik kami atau tentang proses pembuatan kopi yang sempurna.
          </p>
          <p>**Jam Operasional Kami :</p>
          <p>Setiap hari : 07:00 - 20:00</p>
          <p>Kami berharap dapat menyambut Anda di Kopi Asmara segera!</p>
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Menu Section Start-->
    <section id="ourmenu" class="ourmenu">
      <h2><span>Our </span>Menu</h2>
      <p>
        Selamat datang di bagian Menu kami! Di Kopi Asmara, kami bangga
        menyajikan beragam pilihan menu dengan cinta dan dedikasi. Setiap
        hidangan disiapkan dengan bahan-bahan berkualitas tinggi untuk
        memastikan Anda mendapatkan pengalaman kopi yang tak terlupakan. Mari
        temukan hidangan favorit Anda di bawah ini.
      </p>
      <div class="row">
        <div class="menu-card">
          <img src="espresso.jpg" alt="Espresso" class="menu-card-img" />
          <h3 class="menu-card-title">- Espresso -</h3>
          <p class="menu-card-price">IDR 18K</p>
          <a href="#" class="buy">Add To Cart</a>
        </div>
        <div class="menu-card">
          <img
            src="americano.jpg"
            alt="Americano"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Americano -</h3>
          <p class="menu-card-price">IDR 20K</p>
          <a href="#" class="buy">Add To Cart</a>
        </div>
        <div class="menu-card">
          <img
            src="cafelate.jpg"
            alt="Cafe Late"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Cafe Late -</h3>
          <p class="menu-card-price">IDR 22K</p>
          <a href="#" class="buy">Add To Cart</a>
        </div>
        <div class="menu-card">
          <img
            src="cappucino.jpg"
            alt="Cappucino"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Cappucino -</h3>
          <p class="menu-card-price">IDR 24K</p>
          <a href="#" class="buy">Add To Cart</a>
        </div>
        <div class="menu-card">
          <img
            src="flatwhite.jpg"
            alt="Flat White"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Flat White -</h3>
          <p class="menu-card-price">IDR 26K</p>
          <a href="#" class="buy">Add To Cart</a>
        </div>
        <div class="menu-card">
          <img
            src="macchiato.jpg"
            alt="Macchiato"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Macchiato -</h3>
          <p class="menu-card-price">IDR 28K</p>
          <a href="#" class="buy">Add To Cart</a>
        </div>
        <div class="menu-card">
          <img src="mocha.jpg" alt="Mocha" class="menu-card-img" />
          <h3 class="menu-card-title">- Mocha -</h3>
          <p class="menu-card-price">IDR 28K</p>
          <a href="#" class="buy">Add To Cart</a>
        </div>
        <div class="menu-card">
        <div class="contentBox">
          <img src="affogato.jpg" alt="Affogato" class="menu-card-img" />
          <h3 class="menu-card-title">- Affogato -</h3>
          <p class="menu-card-price">IDR 28K</p>
          <a href="#" class="buy">Add To Cart</a>
        </div>
        </div>
      </div>
    </section>
    <!-- Menu Section End-->

    <!-- Contact Section Start -->
    <section id="contact" class="contact">
      <h2><span>Kontak </span>Kami</h2>
      <p>Jl. Ahmad Yani No. 123</p>
      <p>Kota Surabaya, 12345</p>
      <p>Telp: 0856-5531-3012</p>
      <p>Email: <a href="mailto:info@kopiasmara.com">info@kopiasmara.com</a></p>
      <p>
        Terima kasih telah mengunjungi situs kami. Jangan ragu untuk menghubungi
        nomor telepon atau e-mail yang tertera jika Anda membutuhkan bantuan.
      </p>

      <div class="row" style="text-align: center">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3246.967662024069!2d112.70998249464213!3d-7.282347908487976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1694436610519!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>
      </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Start -->
    <footer>
      <div class="footerContainer">
      <div class="socialicons">
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="youtube"></i></a>
      </div>
      <div class="footerNav">
        <ul>
        <a href="#home">Home</a>
        <a href="#about">About Us</a>
        <a href="#ourmenu">Our Menu</a>
        <a href="#contact">Contact</a>
        </ul>
      </div>
      <div class="footerbottom">
        <p>Created by <a href="">kopiasmara</a> | &copy; 2023</p>
      </div>
      </div>
    </footer>
    <!-- Footer End -->

    <!-- feathers icon-->
    <script>
      feather.replace();
    </script>

    <!-- Javascript -->
    <script src="script.js"></script>
  </body>
</html>