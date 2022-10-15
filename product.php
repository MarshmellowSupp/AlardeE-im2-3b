<?php 
    require_once "dbconnect.php";
?>

<link rel="stylesheet" href="styleProduct.css">

<div class="form">
    <form action="" method="post">
        <div class="header">
            <div class="menu">
                <a href="index.php" class="menu homeLink">HOME</a>
                <a href="product.php" class="menu productLink">PRODUCT</a>
                <a href="category.php" class="menu categoryLink">CATEGORY</a>
            </div>
        </div>
        <div class="body">
            <div class="titleProduct">ADD PRODUCT</div>
            <div class="productName">
                <input type="text" placeholder="Product Name" name="prodName" class="prodName" id="prodName">
                <br>
                <input type="text" placeholder="Price" class="prodPrice" name="prices">
            </div>
            <div class="categoryPicker">
                <select name="category" id="cat" class="catBox">
                <option selected hidden disabled>Category</option>
                <?php
                    $sqlQuery = "SELECT * from category";
                    $res = $conn->query($sqlQuery);
                    while($row =mysqli_fetch_object($res)){
                    ?>
                        <option value="<?php echo $row->categoryID?>"><?php echo $row->categoryName?></option>
                    <?php
                    } ?>
                </select>
            </div>
            <div class="statusPicker">
                <select name="status" id="stat" class="statBox">
                <option selected hidden disabled>Status</option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
                </select>
            </div>
            <div class="submitBox">
                <input type="submit" class="subBox">
            </div>
        </div>
    </form>
</div>

<?php
    require_once "dbconnect.php";
    if($_POST){
        $prodName = $_POST['prodName'];
        $catID = $_POST['category'];
        $statusProd = $_POST['status'];
        $prodPrice = $_POST['prices'];
        $sql = "INSERT INTO product (categoryID, productName, status, price) values ('$catID', '$prodName', '$statusProd', '$prodPrice')";
        if($conn->query($sql))
            header('Location:index.php');
        else
            echo "Error occured";
    }
?>