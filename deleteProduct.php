<?php

require_once "dbconnect.php";

$prodID = $_GET['id'];

$sql = "DELETE FROM product WHERE productID= $prodID";
$res  = $conn->query($sql);
if($res)
    header('Location: index.php');
else    
    echo "error happened";
?>