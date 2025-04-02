<?php
include "dbconfig.php";



if (isset($_POST['thoat'])) {
    // Hủy các biến session cụ thể
    unset($_SESSION['role']);
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    unset($_SESSION['pass']);

    
    // Chuyển hướng về trang index.php
    header('Location: ../index.php');
    exit();
}
?>
