<?php
function checkuser($email, $pass) {
        global $connection;
    
        // Sử dụng prepared statement với bind_param
        $stmt = $connection->prepare("SELECT * FROM user WHERE email = ? AND pass = ?");
        $stmt->bind_param('ss', $email, $pass);
        $stmt->execute();
    
        $result = $stmt->get_result();
        $num_rows = $result->num_rows;
    
        if ($num_rows > 0) {
            $kq = $result->fetch_assoc();
            $_SESSION['name'] = $kq['name'];
            return $kq['role'];
        } else {
            return 2; // Trả về 2 nếu không tìm thấy người dùng
        }
    }
if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
    $email =$_POST['email'];
    $pass =$_POST['pass'];
    $role = checkuser($email,$pass);
    $_SESSION['role'] =$role;
    if ($role == 1){ 
        header('location: admin.php'); //check admin
        exit();
    } 
    elseif($role == 0){
        header('location: ../user.php'); //check user
        exit();
    }
    else{
        $error_message = "Không tìm thấy người dùng hoặc sai mật khẩu";
    }
    
}
?>