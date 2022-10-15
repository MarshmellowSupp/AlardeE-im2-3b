<?php
    require_once "dbconnect.php";
?>
<style>
    table, th, td {
        border: 2px solid black;
        border-collapse: collapse;
    }
</style>

<h4>list</h4>

<table>
    <tr>
        <th>ID</th>
        <th>Category Name</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>action</th>
    </tr>
    
    <?php
        $sql = "select * from product";
        $result = $conn->query($sql);
        
        while($row = mysqli_fetch_object($result)){
            echo "<tr>";
            echo "<td>$row->ID</td>";
            echo "<td>$row->Category</td>";
            echo "<td>$row->Name</td>";
            echo "<td>$row->Price</td>";
            echo "<td><a href=\"#\">Delete</a></td>";
            echo "</tr>";
        }
    
    ?>

</table>


