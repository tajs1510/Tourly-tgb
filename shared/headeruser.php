<?php include __DIR__ . '/../common/dbconfig.php'; // đường dẫn tuyệt đối
include __DIR__ .'/../admin/checkuser.php'; // tuyệt đối
session_start();

?>

<header class="header" data-header>

  <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <a href="tel:+01123456790" class="helpline-box">

          <div class="icon-box">
            <ion-icon name="call-outline"></ion-icon>
          </div>

          <div class="wrapper">
            <p class="helpline-title">HOTLINE: </p>

            <p class="helpline-number">+84 774132514</p>
          </div>

          </a>

          <a href="index.php" class="logo">
            <img src="images/logo.svg" alt="Tourly logo">
          </a>
          
          <h3><a id="login" href="#">    
                  <?php 
                    if(isset($_SESSION['name'])) echo $_SESSION['name'];                           
                  ?>           
          </a></h3>
          
          
</div>
          
          
          
          
          
      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

        <ul class="social-list">

          <li>
            <a href="https://www.facebook.com/tabaocraft" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.youtube.com/channel/UCIx2MFZ9wN4wGvyGTFI4VIw" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

        <nav class="navbar" data-navbar>

          <div class="navbar-top">

            <a href="#" class="logo">
              <img src="images/logo-blue.svg" alt="Tourly logo">
            </a>

            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>

          <ul class="navbar-list">

            <li>
              <a href="index.php" class="navbar-link" data-nav-link>TRANG CHỦ</a>
            </li>

            <li>
              <a href="aboutus.html" class="navbar-link" data-nav-link>VỀ CHÚNG TÔI</a>
            </li>

            <li>
              <a href="#destination" class="navbar-link" data-nav-link>ĐIỂM ĐẾN</a>
            </li>

            <li>
              <a href="#package" class="navbar-link" data-nav-link>DỊCH VỤ</a>
            </li>

            <li>
              <a href="#gallery" class="navbar-link" data-nav-link>ĐÁNH GIÁ</a>
            </li>

            <li>
              <a href="#contact" class="navbar-link" data-nav-link>LIÊN HỆ</a>
            </li>

          </ul>

        </nav>

        <button class="btn btn-primary">Book Now</button>

      </div>
    </div>
  </header>


