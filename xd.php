<?php
    require_once "dbconnect.php";
?>

<link rel="stylesheet" href="xd.css">

<div class = "form">
    <form action="" method="post">
        <div class="rectangleHeader">
            <div class = "menu">
                <a href="index.php" class="menu homeLink">HOME</a>
                <a href="product.php" class="menu productLink">PRODUCT</a>
                <a href="category.php" class="menu categoryLink">CATEGORY</a>
            </div>
        </div>
        <div class = "rectangleBody">
            <div class = "titleCategory">ADD CATEGORY</div>
            <input type="text" placeholder="Category Name" name="catName" class="catName">
            <br>
            <select name="status" id="stat" class="statBox">
                <option selected hidden disabled>Status</option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
            <input type="submit" class="subBox">
        </div>
    </form>
</div>

<?php 
    require_once "dbconnect.php";
    if($_POST){
        $catName = $_POST['catName'];
        $statusProd = $_POST['status'];
        $sql = "INSERT INTO category (categoryName, status) values ('$catName', '$statusProd')";
        if($conn->query($sql))
            header('Location:categoryIndex.php');
        else
            echo "Error occured";
    }
?>