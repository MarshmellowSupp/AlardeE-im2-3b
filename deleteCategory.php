<?php
require_once "dbconnect.php";

$catID = $_GET['id'];
$sql = "DELETE FROM category WHERE id = $catID";
$res = $conn->query($sql);
if($res)
    header('Location: index.php');
else
echo "Error happened";