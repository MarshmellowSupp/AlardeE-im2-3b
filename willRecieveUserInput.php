<?php

        require_once "dbconnect.php";

        $catName = $_POST['name'];
        $catStatus = $_POST['status'];

        $sql = "INSERT INTO category (categoryName, status) values ('$catName', '$catStatus')";
    
        $res  = $conn->query($sql);
        if($res)
            header('Location:categoryIndex.php');
        else    
            echo "error happened";
?>