<?php
    if(isset($_GET["id"])){ 
        $id = $_GET["id"]; 

        include "../common/dbconfig.php"; 
        
        $sql = "DELETE FROM tours WHERE id=$id"; 
        $connection ->query($sql); 
        header("location: ../admin.php"); 
        exit; 
    }
?>