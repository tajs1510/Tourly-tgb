<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm tour</title>
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
    <?php
        include("../common/dbconfig.php");

        $id = $_GET['id']; 
         if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                if (!isset($_GET["id"])) { 
                    header("location: admin.php"); 
                    exit; 
                }
                $sql = "SELECT * FROM tours WHERE id='$id'"; 
                $result = $connection->query($sql); 
                $row = $result->fetch_assoc(); 
                if (!$row) { 
                    header("location: admin.php"); 
                    exit; 
                }
                $tieude = $row['tieude']; 
                $gioithieu = $row['gioithieu']; 
                $ngaydem = $row['ngaydem']; 
                $songuoi = $row['songuoi'];
                $diadiem = $row['diadiem'];
                $giatour = $row['giatour'];
                $hinhanh = $row['hinhanh'];
                 
        }else{ 
            $tieude = $_POST['tieude']; 
            $gioithieu = $_POST['gioithieu']; 
            $ngaydem = $_POST['ngaydem']; 
            $songuoi = $_POST['songuoi'];
            $diadiem = $_POST['diadiem'];
            $giatour = $_POST['giatour'];
            $hinhanh = basename($_FILES['hinhanh']['name']);
            $target_dir = "../images/";
            $target_file =  $target_dir . $hinhanh; 
            $sql = "UPDATE tours SET tieude='$tieude', gioithieu='$gioithieu', 
            ngaydem='$ngaydem', songuoi='$songuoi', diadiem='$diadiem'
            , giatour='$giatour', hinhanh='$hinhanh' WHERE id='$id'"; 
            $result = $connection->query($sql);
            if (file_exists($target_file)) {
                die("File đã tồn tại. Vui lòng đổi tên file và thử lại.");
            }
    
            // Kiểm tra kích thước file (giả sử giới hạn là 5MB)
            if ($_FILES['hinhanh']['size'] > 5 * 1024 * 1024) {
                die("File quá lớn. Vui lòng chọn file có kích thước nhỏ hơn.");
            }
    
            // Kiểm tra loại file (giả sử chỉ chấp nhận các loại file hình ảnh)
            $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');
            $file_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            if (!in_array($file_extension, $allowed_extensions)) {
                die("Chỉ chấp nhận các file hình ảnh có định dạng JPG, JPEG, PNG hoặc GIF.");
            }
    
            // Di chuyển file tải lên vào thư mục đích
            if (!move_uploaded_file($_FILES['hinhanh']['tmp_name'], $target_file)) {
                die("Có lỗi khi di chuyển file vào thư mục đích. Vui lòng thử lại.");
            }
    
            $sql = "INSERT INTO tours(tieude, gioithieu, ngaydem, songuoi, diadiem, giatour, hinhanh) 
                    VALUES('$tieude', '$gioithieu', '$ngaydem', '$songuoi', '$diadiem', '$giatour', '$hinhanh')";
            $result = $connection->query($sql);
    
            if (!$result) { 
                die("Lỗi kết nối: " . $connection->connect_error); 
            }
        }

    ?>
    <div class="container">
        <h3 class="title">Sửa tour</h3>
        <form method="post" enctype="multipart/form-data">
            <div>
                <label>Mã tour</label>
                <input type="text" name="id" id="id" disabled value="<?php echo $id; ?>">
            </div>
            <div>
                <label for="tieude">Tiêu đề</label>
                <input type="text" name="tieude" value="<?php echo $tieude; ?>">
            </div>
            <div>
                <label for="gioithieu">Giới thiệu</label>
                <input type="text" name="gioithieu" value="<?php echo $gioithieu; ?>">
            </div>
            <div>
                <label for="ngaydem">Ngày / Đêm</label>
                <input type="text" name="ngaydem" value="<?php echo $ngaydem; ?>">
            </div>
            <div>
                <label for="songuoi">Số người</label>
                <input type="text" name="songuoi" value="<?php echo $songuoi; ?>">
            </div>
            <div>
                <label for="diadiem">Địa điểm</label>
                <input type="text" name="diadiem" value="<?php echo $diadiem; ?>">
            </div>
            <div>
                <label for="giatour">Giá tour</label>
                <input type="text" name="giatour" value="<?php echo $giatour; ?>">
            </div>
            <div>
                    <label for="hinhanh">Hình ảnh tour</label>
                    <input type="file" name="hinhanh" id="hinhanhInput" onchange="showImagePreview()">
                    <?php
                    echo "<img id='imagePreview' src='images/{$row['hinhanh']}' width='1024' height='682' alt='Xem trước ảnh chọn để sửa' loading='lazy'>";
                    ?>
                    </div>
            <div>
                
                <input type="submit" name="submit" value ="Cập nhật">
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