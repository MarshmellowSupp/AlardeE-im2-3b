<?php 
    require_once "dbconnect.php";
    $prodID = $_GET['id'];

    $sqlQuery = "SELECT product.productID as prodID, product.productName as prodName, category.categoryID as catID, category.categoryName as catName, product.status as prodStatus, product.price as prodPrice from category INNER JOIN product ON category.categoryID = product.categoryID WHERE productID ='$prodID'";
    $res = $conn->query($sqlQuery);
    $row = mysqli_fetch_object($res);

    if($_POST){
        $prodName = $_POST['prodName'];
        $catID = $_POST['category'];
        $statusProd = $_POST['status'];
        $prodPrice = $_POST['prices'];
        $sql = "UPDATE product SET productName='$prodName', categoryID='$catID', status='$statusProd', price='$prodPrice' WHERE productID = '$prodID'";
        if($conn->query($sql))
            header('Location:index.php');
        else
            echo "Error occured";
    }
?>

<link rel="stylesheet" href="styleProduct.css">

<div class="form">
    <form action="" method="post">
        <div class="header">
            <div class="menu">
                <a href="index.php" class="menu homeLink">HOME</a>
                <a href="product.php" class="menu productLink">PRODUCT</a>
                <a href="" class="menu categoryLink">CATEGORY</a>
            </div>
        </div>
        <div class="body">
            <div class="titleProduct">UPDATE PRODUCT</div>
            <div class="productName">
                <input type="text" placeholder="Product Name" name="prodName" class="prodName" id="prodName" value = "<?php echo $row->prodName ?>">
                <br>
                <input type="text" placeholder="Price" class="prodPrice" name="prices" value = "<?php echo $row->prodPrice ?>">
            </div>
            <div class="categoryPicker">
                <select name="category" id="cat" class="catBox">
                <option value="<?php echo $row->catID?>" selected hidden><?php echo $row-> catName?></option>
                <?php
                    $sqlQuery = "SELECT * from category";
                    $res = $conn->query($sqlQuery);
                    while($row1 =mysqli_fetch_object($res)){
                    ?>
                        <option value="<?php echo $row1->categoryID?>"><?php echo $row1->categoryName?></option>
                    <?php
                    } ?>
                </select>
            </div>
            <div class="statusPicker">
                <select name="status" id="stat" class="statBox">
                <option value="<?php echo $row->prodStatus?>" selected hidden><?php echo $row->prodStatus?></option>
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

<style>
    .titleProduct{
        position: absolute;
        top: -2px;
    }
</style>