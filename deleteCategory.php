<?php

require_once "dbconnect.php";

$catId = $_GET['id'];

$sql = "DELETE FROM category WHERE id= $catId";

$res  = $conn->query($sql);
if($res)
    header('Location: categoryIndex.php');
else    
    echo "error happened";