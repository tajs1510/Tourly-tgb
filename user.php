<?php
include "common/dbconfig.php";
include "shared/headeruser.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travelbpd</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body id="top">

 
  
  

      
      
  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title">Hành trình khám phá thế giới</h2>

          <p class="hero-text">
            Bạn muốn tìm một nơi nghỉ dưỡng? Một nơi có thể xỏa stress sau những ngày làm việc căng thẳng, hãy đến với chúng tôi dịch vụ kết nối các Tour từ khắp nơi trên thế giới. Chúng tôi là Travelbpd
          </p>

          <div class="btn-group">
            <button class="btn btn-primary">Learn more</button>

            <button class="btn btn-secondary">Book now</button>
          </div>

        </div>
      </section>





      <!-- 
        - #TOUR SEARCH
      -->

      <section class="tour-search">
        <div class="container">

          <form action="common/book_form_user.php"  method ="post"class="tour-search-form">

            <div class="input-wrapper">
              <label for="destination" class="input-label">Địa điểm muốn đến*</label>

              <input type="text" name="destination" id="destination" required placeholder="Enter Destination"
                class="input-field">
            </div>
            <div class="input-wrapper">
              <label for="name" class="input-label">Tên của bạn*</label>

              <input type="text" name="name" id="name" required placeholder="Nhập tên" class="input-field" value="<?php if(isset($_SESSION['name'])) echo $_SESSION['name'];  ?>">
            </div>
            <div class="input-wrapper">
              <label for="phone" class="input-label">Số Điện Thoại*</label>

              <input type="text" name="phone" id="phone" required placeholder="Enter Phone"
                class="input-field">
            </div>
            <div class="input-wrapper">
              <label for="email" class="input-label">Email*</label>

              <input type="text" name="email" id="email" required placeholder="Nhập email" class="input-field" value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email']; ?>">
            </div>

            <div class="input-wrapper">
              <label for="people" class="input-label">Số người lớn*</label>

              <input type="number" name="people" id="people" required placeholder="No.of People" class="input-field">
            </div>
            <div class="input-wrapper">
              <label for="children" class="input-label">Số trẻ em*</label>

              <input type="number" name="children" id="children" required placeholder="No.of People" class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="checkin" class="input-label">Ngày Checkin**</label>

              <input type="date" name="checkin" id="checkin" required class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="checkout" class="input-label">Ngày Checkout *</label>

              <input type="date" name="checkout" id="checkout" required class="input-field">
            </div>

            
            
            <button type="submit" class="btn btn-secondary" name="timkiem">Tìm kiếm</button>

          </form>

        </div>
      </section>





      <!-- 
        - #POPULAR
      -->

      <section class="popular" id="destination">
        <div class="container">

          <p class="section-subtitle">Khám phá địa điểm</p>

          <h2 class="h2 section-title">Điểm đến hấp dẫn</h2>

          <p class="section-text">
            Những địa điểm hấp dẫn dưới đây sẽ giúp bạn tìm kiếm được những điểm đến du lịch thu vị sắp tới.  
          </p>

          <ul class="popular-list">

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="images/popular-1.jpg" alt="San miguel, italy" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Italy</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Milan</a>
                  </h3>

                  <p class="card-text">
                  Khi đặt chân đến Milan và có thời gian để khám phá, du khách sẽ thấy ẩn chứa trong thành phố này còn khá nhiều điều đặc biệt thi vị khác ngoài tiếng tăm về thời trang.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="images/popular-2.jpg" alt="Burj khalifa, dubai" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Dubai</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Burj khalifa</a>
                  </h3>

                  <p class="card-text">
                  Burj Khalifa được biết đến là một trong những nơi đáng sống nhất trên thế giới với nhiều tiện nghi sang trọng, hiện đại thỏa mãn mọi nhu cầu của người dân và khách du lịch.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="images/popular-3.jpg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Japan</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Kyoto temple</a>
                  </h3>

                  <p class="card-text">
                  Đây là một nơi tuyệt vời để nhìn ra Kyoto. Tháp Kyoto có tổng cộng 9 tầng với một khách sạn ba sao và một số cửa hàng.
                  </p>

                </div>

              </div>
            </li>

          </ul>

          <button class="btn btn-primary">More destintion</button>

        </div>
      </section>





      <!-- 
        - #PACKAGE
      -->

      <section class="package" id="package">
        <div class="container">

          <p class="section-subtitle">Các Tour được ưa chuộng</p>

          <h2 class="h2 section-title">MỜI BẠN THAM KHẢO</h2>

          <p class="section-text">
            Các tour dưới đây được Travelbpd tổng hợp lại từ các công ty du lịch hàng đầu sẽ mang lại cho bạn một trải nghiệm tuyệt vời.
          </p>

          <ul class="package-list">

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="images/tournhatrang.jpeg" alt="Experience The Great Holiday On Beach" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Trải nghiệm tuyệt vời cho ngày nghỉ trên biển</h3>

                  <p class="card-text">
                    Hãy hòa vào dòng nước mát lành cùng những cơn sóng biển lăn tăn của Nha Trang...
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">4D/3N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 2</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">VietNam</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(25 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    2.500.000VNĐ
                    <span>/ người</span>
                  </p>

                  <button class="btn btn-secondary">Book Now</button>

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="images/packege-2.jpg" alt="Summer Holiday To The Oxolotan River" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Kì nghỉ tuyệt vời trên sông Oxolotan-Croatia</h3>

                  <p class="card-text">
                    Sông Oxolotan là một điểm đến xinh đẹp và yên bình cho kỳ nghỉ hè.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">4D/3N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 5</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Croatia</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(20 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                  18,185,625VNĐ
                    <span>/ người</span>
                  </p>

                  <button class="btn btn-secondary">Book Now</button>

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="images/packege-3.jpg" alt="Santorini Island's Weekend Vacation" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">KỲ NGHỈ CUỐI TUẦN ĐẢO SANTORINI</h3>

                  <p class="card-text">
                    
Đảo Santorini là nơi hoàn hảo cho một nơi nghỉ ngơi cuối tuần. Tự hào với một loạt cảnh quan núi lửa tuyệt đẹp…
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">6D/5N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 8</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Greece</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(40 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    16,949,002VNĐ
                    <span>/ người</span>
                  </p>

                  <button class="btn btn-secondary">Book Now</button>

                </div>

              </div>
            </li>

          </ul>

          <a href="tour_user.php"><button class="btn btn-primary">View All Packages</button></a>

        </div>
      </section>





      <!-- 
        - #GALLERY
      -->

      <section class="gallery" id="gallery">
        <div class="container">

          <p class="section-subtitle">Photo Gallery</p>

          <h2 class="h2 section-title">Photo's From Travellers</h2>

          <p class="section-text">
            Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium.
            Sit ornare
            mollitia tenetur, aptent.
          </p>

          <ul class="gallery-list">

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="images/gallery-1.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="images/gallery-2.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="images/gallery-3.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="images/gallery-4.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="images/gallery-5.jpg" alt="Gallery image">
              </figure>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="cta" id="contact">
        <div class="container">

          <div class="cta-content">
            <p class="section-subtitle">Call To Action</p>

            <h2 class="h2 section-title">Ready For Unforgatable Travel. Remember Us!</h2>

            <p class="section-text">
              Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque
              laudantium. Sit ornare
              mollitia tenetur, aptent.
            </p>
          </div>

          <button class="btn btn-secondary">Contact Us !</button>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <?php include "shared/footer.html" ?>
  







  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>