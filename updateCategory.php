<?php
    require_once "dbconnect.php";

    $catID=$_GET['id'];

    $sqlQuery = "SELECT * from category where id = $catID";
    $res = $conn->query($sqlQuery);

    $row = $res->fetch_assoc();

    if($_POST){
        $catName = $_POST['name'];
        $catStatus = $_POST['status'];
        $sqlQuery = "update category set name = '$catName', status ='$catStatus' where id = $catID ";
        
        $res = $conn->query($sqlQuery);

        if($res)
            header("Location: index.php");
    }
?>


<form action="" method="post">
    <input type="text" placeholder="Enter Category name" 
        name="name" 
        value="<?php echo $row['name']?>">
    <br>
    <input type="text" placeholder="Enter category status" 
        name="status" 
        value="<?php echo $row['status']?>">
    <br>
    <input type="submit">
</form>
