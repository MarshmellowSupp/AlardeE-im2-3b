<?php 
    require_once "dbconnect.php";
    $catID = $_GET['id'];

    $sqlQuery = "SELECT * FROM category WHERE categoryID = '$catID'";
    $res = $conn->query($sqlQuery);
    $row = mysqli_fetch_object($res);

    if($_POST){
        $catName = $_POST['catName'];
        $statusCat = $_POST['status'];;
        $sql = "UPDATE category SET categoryName='$catName', statusCat='$statusProd'WHERE productID = '$catID'";
        if($conn->query($sql))
            header('Location:index.php');
        else
            echo "Error occured";
    }
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
            <input type="text" placeholder="Category Name" name="catName" class="catName" value = "<?php echo $row->categoryName?>">
            <br>
            <select name="status" id="stat" class="statBox">
                <option selected hidden value ="<?php echo $row->status?>"><?php echo $row->status?></option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
            <input type="submit" class="subBox">
        </div>
    </form>
</div>