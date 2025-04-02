<?php
include "checkuser.php";
include "../common/dbconfig.php";

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styleadmin.css">
    <style>
        
.btn{ 
    display: inline-block; 
    padding: 8px 15px; 
    border-radius: 4px; 
    text-decoration: none; 
    text-align: center; 
    margin-right: 15px; 
} 

.title{ 
    font-weight: 700; 
    margin-bottom: 10px; 
    font-size: 40px; 
    text-transform: uppercase; 
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


    </style>
</head>
<body>
<div class="table">
<h3 class="title">Danh sách khách hàng</h3>
            <table>
                <thead>
                    <tr>
                        <th>TT</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>SDT</th>
                        <th>Điểm đến</th>
                        <th>Số người lớn</th>
                        <th>Số trẻ em</th>
                        <th>Ngày đi</th>
                        <th>Ngày về</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
               
                    ob_start();
                    
                    if(isset($_SESSION['role'])&&($_SESSION['role']==1)){
                        $sql = "SELECT * FROM book_form";
                        $result = $connection ->query($sql);
                        if ($result -> num_rows > 0){
                            while ($row = $result->fetch_assoc()){
                                echo "
                                    <tr>
                                        <td>$row[id]</td>
                                        <td>$row[ten]</td>
                                        <td>$row[email]</td>
                                        <td>$row[sdt]</td>
                                        <td>$row[diemdien]</td>
                                        <td>$row[nguoilon]</td>
                                        <td>$row[treem]</td>
                                        <td>$row[ngaydi]</td>
                                        <td>$row[ngayve]</td>
                                        
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
</body>
</html>