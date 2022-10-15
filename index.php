<?php
    require_once "dbconnect.php";
?>

 <a href="product.php">GO BACK TO THE FORM</a>
 <link rel="stylesheet" href="style.css">
 <table class="center" border="1">
    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Actions </th>
    </tr>

    <?php
        $sqlQuery = "SELECT product.productID as prodID, product.productName as prodName, category.categoryName as catName, category.status as catStatus, product.price as prodPrice from category INNER JOIN product ON category.categoryID = product.categoryID";
        $res = $conn->query($sqlQuery);
        while($row =mysqli_fetch_object($res)){
            ?>
                <tr style="text-align:center">
                    <td><?php echo $row->prodID?></td>
                    <td><?php echo $row->prodName?></td>
                    <td><?php echo $row->catName?></td>
                    <td><?php echo $row->prodPrice?></td>
                    <td>
                        <a href="updateProduct.php? id=<?php echo $row->prodID?>">Update</a>
                         | 
                        <a href="deleteProduct.php? id=<?php echo $row->prodID?>">Delete</a>
                    </td>
                </tr>
        <?php
            }   
        ?>
</table>

<style>
    table,td,th{
        border: 1px solid black;
    }

    table{
        border-collapse: collapse;
        width: 100%;
    }

    td{
        text-align: center;
    }

    *{
        background: #7aa3b4;
    }
</style>