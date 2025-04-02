<?php
include "../common/dbconfig.php";
session_start();
if (isset($_POST['submit'])) {
    
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $pass = $_POST['pass'];
    $role = $_POST['role'];
    
    $sql = "INSERT INTO user(`name`, email, pass, `role`) 
            VALUES('$name', '$email', '$pass', '$role')";
    $result = $connection->query($sql);

    if (!$result) { 
        die("Lỗi kết nối: " . $connection->connect_error); 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add admin</title>
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
    }.submit:hover, .primary:hover{ 
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
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>TT</th>
                        <th>name</th>
                        <th>email</th>
                        <th>pass</th>
                        <th>role</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
               
                    ob_start();
                    
                    if(isset($_SESSION['role'])&&($_SESSION['role']==1)){
                        $sql = "SELECT * FROM user WHERE role = 1";
                        $result = $connection ->query($sql);
                        if ($result -> num_rows > 0){
                            while ($row = $result->fetch_assoc()){
                                echo "
                                    <tr>
                                        <td>$row[id]</td>
                                        <td>$row[name]</td>
                                        <td>$row[email]</td>
                                        <td>$row[pass]</td>
                                        <td>$row[role]</td>    
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
    <div class="container">
            <h3 class="title">Thêm mới admin</h3>
            <form action="" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="name">Tên admin</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email">
                </div>
                <div>
                    <label for="pass">Passoword</label>
                    <input type="text" name="pass">
                </div>
                <div>
                    <label for="role">Role phải điền là 1</label>
                    <input type="text" name="role">
                </div>

                <div>
                    
                    <input type="submit" name="submit" value ="Thêm mới">
                    <a href="admin.php"><input type="button" value="Hủy" class="cancle"></a>
                </div>
            </form>
    </div>
</body>
</html>
</html>