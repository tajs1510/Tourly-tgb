<?php
include "../common/dbconfig.php";
include "../common/codeaddtour.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&fam');
*{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'Open Sans', sans-serif; outline: none; font-size: 16px; } 

.container{ 
    max-width: 1200px; 
    margin: auto; 
    padding-top: 40px; 
} 
.title{ 
    font-weight: 700; 
    margin-bottom: 10px; 
    font-size: 40px; 
    text-transform: uppercase; 
} 
.submit{ 
    background-color: #4285F4; 
    color: #fff; 
    display: inline-block; 
    padding: 16px 8px; 
    border-radius: 6px; 
    text-decoration: none; 
    text-align: center; 
    margin-bottom: 20px; 
} .submit:hover, .primary:hover{ 
    background-color: #1967e5; 
} 
input[type=text], 
input[type=email]{ 
    border: 1px solid #E0E0E0; 
    padding: 8px 15px; 
    border-radius: 8px; 
    font-size: 18px; 
    margin-bottom: 20px; 
    width: 100%; 
} 
input[type=submit]{ 
    border: none; 
    padding: 10px 15px; 
    font-size: 16px; 
    font-weight: 600;
     background-color: #1967e5; 
     color: #fff; cursor: pointer; 
     margin-right: 20px; 
     border-radius: 8px; 
    } 
input[type=submit]:hover{ 
    background-color: #4285F4; 
} 
.cancel{ 
    border: none; 
    padding: 10px 40px;
     font-size: 16px; 
     font-weight: 600; 
     background-color: transparent; 
     color: #1967e5; 
     cursor: pointer; 
     border: 1px solid #1967e5; 
     border-radius: 8px; 
} 
.cancel:hover{ background-color: #1967e5; color: #fff; }
    </style>
</head>
<body>
 
    <div class="container">
            <h3 class="title">Thêm mới tour</h3>
            <form action="" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="tieude">Tiêu đề</label>
                    <input type="text" name="tieude">
                </div>
                <div>
                    <label for="gioithieu">Giới Thiệu</label>
                    <input type="text" name="gioithieu">
                </div>
                <div>
                    <label for="ngaydem">Ngày đêm (xD/xN)</label>
                    <input type="text" name="ngaydem">
                </div>
                <div>
                    <label for="songuoi">Số người</label>
                    <input type="text" name="songuoi">
                </div>
                <div>
                    <label for="diadiem">Địa điểm</label>
                    <input type="text" name="diadiem">
                </div>
                <div>
                    <label for="giatour">Giá tour</label>
                    <input type="text" name="giatour">
                </div>
                <div>
                    <label for="hinhanh">Hình ảnh tour</label>
                    <input type="file" name="hinhanh" id="hinhanhInput" onchange="showImagePreview()">
                    <?php
                    echo "<img id='imagePreview' src='images/['hinhanh']}' width='1024' height='682' alt='Xem trước ảnh chọn để thêm' loading='lazy'>";
                    ?>
                </div>

                <div>
                    
                    <input type="submit" name="submit" value ="Thêm mới">
                    <a href="admin.php"><input type="button" value="Hủy" class="cancle"></a>
                </div>
            </form>
    </div>
    <!--
show hình ảnh ra khi chọn
-->
<script>
        function showImagePreview() {
            var input = document.getElementById('hinhanhInput');
            var preview = document.getElementById('imagePreview');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
</html>