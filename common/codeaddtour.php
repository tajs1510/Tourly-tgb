<?php           
    if (isset($_POST['submit']) && !empty($_FILES['hinhanh']['name'])) {
        $tieude = $_POST['tieude']; 
        $gioithieu = $_POST['gioithieu']; 
        $ngaydem = $_POST['ngaydem']; 
        $songuoi = $_POST['songuoi'];
        $diadiem = $_POST['diadiem'];
        $giatour = $_POST['giatour'];
        $hinhanh = basename($_FILES['hinhanh']['name']);
        $target_dir = "../images/";
        $target_file =  $target_dir . $hinhanh;

        // Kiểm tra xem file đã tồn tại chưa
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
