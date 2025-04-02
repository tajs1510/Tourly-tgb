<?php 
include "common/dbconfig.php";
include "common/codeaddtour.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
     
</head>
<body>
<?php include "shared/headeruser.php"?>
      
      <section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title">Các dịch vụ</h2>

          <p class="hero-text">
            Dưới đây là các tour hiện khả dụng của Travelbpd
          </p>

          

        </div>
      </section>
      <section class="package" id="package">
        <div class="container">

          

          <h2 class="h2 section-title">MỜI BẠN THAM KHẢO</h2>

          

          <ul class="package-list">
            
            <?php
            $sql = "SELECT * FROM tours";
            $result = $connection ->query($sql);
            if (!$result) {
              die("Lỗi truy vấn: " . $connection->error);
            }
            if ($result -> num_rows > 0){
                while ($row = $result->fetch_assoc()){
                    echo"
                    <li>
                        <div class='package-card'>
                            <figure class='card-banner'>
                            <img src='images/$row[hinhanh]' width='1024' height='682' alt='Experience The Great Holiday On Beach' loading='lazy'>
                            </figure>
                            <div class='card-content'>
                                <h3 class='h3 card-title'>$row[tieude]</h3>
                                <p class='card-text'>$row[gioithieu]</p>
                                <ul class='card-meta-list'>
                                    <li class='card-meta-item'>
                                        <div class='meta-box'>
                                            <ion-icon name='time'></ion-icon>
                                            <p class='text'>$row[ngaydem]</p>
                                        </div>
                                    </li>
                                    <li class='card-meta-item'>
                                        <div class='meta-box'>
                                            <ion-icon name='people'></ion-icon>
                                            <p class='text'>pax: $row[songuoi]</p>
                                        </div>
                                    </li>
                                    <li class='card-meta-item'>
                                        <div class='meta-box'>
                                            <ion-icon name='location'></ion-icon>
                                            <p class='text'>$row[diadiem]</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class='card-price'>
                                <div class='wrapper'>
                                    <p class='reviews'>(25 reviews)</p>
                                    <div class='card-rating'>
                                        <ion-icon name='star'></ion-icon>
                                        <ion-icon name='star'></ion-icon>
                                        <ion-icon name='star'></ion-icon>
                                        <ion-icon name='star'></ion-icon>
                                        <ion-icon name='star'></ion-icon>
                                    </div>
                                </div>
                                <p class='price'>
                                    $row[giatour]VNĐ
                                    <span>/ người</span>
                                </p>
                                <button class='btn btn-secondary'>Book Now</button>
                            </div>
                        </div>
                    </li>
      
                   
                    ";
                  }
                }else {
                  echo "<p>Không có dữ liệu.</p>";
                }
                $connection->close();
            ?>
            

           

          

        </div>
      </section>
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<?php include "shared/footer.html"?>
</body>
</html>