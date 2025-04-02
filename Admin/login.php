<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/stylelogin.css">
    
    <title>Đăng nhập / Đăng ký</title>
</head>
<?php
    session_start();
    ob_start();
    include __DIR__.'/../common/dbconfig.php';
    include __DIR__.'/checkuser.php';
    //đăng ký lấy tự động lấy role là 0
    if (isset($_POST['dangky'])&&($_POST['dangky'])) {
        $dangkyname = $_POST['dangkyname']; 
        $dangkyemail = $_POST['dangkyemail']; 
        $dangkypass = $_POST['dangkypass']; 
        $sql = "INSERT INTO user(`name`, email, pass) VALUES('$dangkyname', '$dangkyemail', '$dangkypass')";
        $result = $connection->query($sql);
        if(!$result){ 
            die("Lỗi kết nối: " . $connection->connect_error); 
        }
        $_SESSION['success_message'] = "Đăng ký thành công!";
        
    }
    ob_end_flush();
?>
<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
                <h1>Tạo tài khoản</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input type="text" placeholder="Name" name ="dangkyname">
                <input type="email" placeholder="Email" name="dangkyemail">
                <input type="password" placeholder="Password" name="dangkypass">
                <button type="submit" name="dangky" value="ĐĂNG KÝ">Đăng ký</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
                <h1>Đăng nhập</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="email" placeholder="Email" name="email" id="">
                <input type="password" placeholder="Password" name ="pass">
                <a href="#">Quên mật khẩu?</a>
                <button type="submit" name="dangnhap" value="ĐĂNG NHẬP">Đăng nhập</button>
                <?php
                    if (isset($error_message)&&($error_message != "")){
                        echo $error_message;
                    }
                ?>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Chào bạn!</h1>
                    <p>Nếu đã đăng ký xong thì đăng nhập tại đây</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Chào bạn!</h1>
                    <p>Nếu chưa có tài khoản hãy đăng ký tại đây</p>
                    <button class="hidden" id="register">Đăng ký</button>
                </div>
            </div>
        </div>
    </div>
   
    <script src="../js/scirptlogin.js"></script>
</body>

</html>