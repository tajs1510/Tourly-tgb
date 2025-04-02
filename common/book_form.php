<?php
include "dbconfig.php";
if (isset($_POST['timkiem'])) {
    $ten = $_POST['name'];
    $email = $_POST['email'];
    $sdt = $_POST['phone'];
    $diemden = $_POST['destination'];
    $nguoilon = $_POST['people'];
    $treem = $_POST['children'];
    $ngaydi = $_POST['checkin'];
    $ngayve = $_POST['checkout'];

    $request = "INSERT INTO book_form(ten, email, sdt, diemdien, nguoilon, treem, ngaydi, ngayve) 
                VALUES ('$ten','$email','$sdt','$diemden','$nguoilon','$treem','$ngaydi','$ngayve')";

    $result = mysqli_query($connection, $request);

    if ($result === false) {
      echo 'Error: ' . mysqli_error($connection);
  } else {
      // Redirect to index.php
      header("location: ../index.php"); 
      exit;
  }
}
?>