<?php
    require_once "dbconnect.php";
?>

 <a href="product.php">GO BACK TO THE FORM</a>
 <link rel="stylesheet" href="style.css">
 <table class="center" border="1">
    <tr>
        <th>Category ID</th>
        <th>Category Name</th>
        <th>Status</th>
        <th>Actions </th>
    </tr>

    <?php
        $sqlQuery = "SELECT * FROM category";
        $res = $conn->query($sqlQuery);
        while($row =mysqli_fetch_object($res)){
            ?>
                <tr style="text-align:center">
                    <td><?php echo $row->categoryID?></td>
                    <td><?php echo $row->categoryName?></td>
                    <td><?php echo $row->status?></td>
                    <td>
                        <a href="xdUpdate.php? id=<?php echo $row->categoryID?>">Update</a>
                         | 
                        <a href="deleteCategory.php? id=<?php echo $row->categoryID?>">Delete</a>
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