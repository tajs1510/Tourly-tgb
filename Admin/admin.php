<?php
include "checkuser.php";
include "../common/dbconfig.php";
include "../common/code_log_out.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href ="../css/styleadmin.css">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&fam');
*{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'Open Sans', sans-serif; outline: none; font-size: 16px; } 
.primary{ 
    background-color: #4285F4; 
    color: #fff; 
} 
.danger{ 
    background-color: #E32934; 
    color: #fff; 
}
.danger:hover{ 
    background-color: #c10310; 
} 
.btn{ 
    display: inline-block; 
    padding: 8px 15px; 
    border-radius: 4px; 
    text-decoration: none; 
    text-align: center; 
    margin-right: 15px; 
} 
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
table{ 
    width: 100%; 
    border-collapse: collapse; 
    font-size: 16px; 
    text-align: left; 
    padding: 10px; 
} 
thead{ 
    text-transform: uppercase; 
} 
th, td{ 
    padding: 10px; 
    vertical-align: middle; 
    border-bottom: 1px solid #E0E0E0; 
}

.table{ 
    border: 1px solid #E0E0E0; 
    border-radius: 10px; 
    padding: 20px 40px 40px 40px; 
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
.sex{ 
    margin-bottom: 20px; 
} 
.sex-title{ 
    margin-right: 40px; 
} 
.sex-item{
    display: inline-block; 
    margin-right: 40px; 
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
        <h2 class="title">TRANG ADMIN CỦA <?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?></h2>
        <form method="post">
            <button type="submit" name="thoat">ĐĂNG XUẤT</button>
        </form>
        <a href="addtour.php" class="submit">Thêm tour</a>
        <a href="khachhang.php" class="submit">Xem danh sách khách hàng</a>
        <a href="addadmin.php" class="submit">Xem admin + add</a>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>TT</th>
                        <th>Tiêu đề</th>
                        <th>Giới thiệu</th>
                        <th>Ngày / Đêm</th>
                        <th>Số người</th>
                        <th>Địa điểm</th>
                        <th>Gía tour</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
               
                    ob_start();
                    
                    if(isset($_SESSION['role'])&&($_SESSION['role']==1)){
                        $sql = "SELECT * FROM tours";
                        $result = $connection ->query($sql);
                        if ($result -> num_rows > 0){
                            while ($row = $result->fetch_assoc()){
                                echo "
                                    <tr>
                                        <td>$row[id]</td>
                                        <td>$row[tieude]</td>
                                        <td>$row[gioithieu]</td>
                                        <td>$row[ngaydem]</td>
                                        <td>$row[songuoi]</td>
                                        <td>$row[diadiem]</td>
                                        <td>$row[giatour]</td>
                                        <td>
                                            <a class='btn primary' href='edittour.php?id=$row[id]'>Sửa;</a>
                                            <a class='btn danger' style='margin-right: 0;' href='javascript:void(0);' onclick='confirmDelete($row[id])'>Xóa;</a>
                                        </td>
                                    </tr>
                                ";
                            }
                        }
                    }
                    else{
                        header('location: login.php');
                    }                              
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function confirmDelete(id) {
            var confirmation = confirm("Bạn có chắc muốn xóa?");
            if (confirmation) {
                window.location.href = 'delete_tour.php?id=' + id;
                
            }
        }
    </script>
</body>
</html>