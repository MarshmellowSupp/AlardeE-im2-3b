<?php
include "dbconnect.php";
?>
<form action="">
    
    <label for="cars">Choose Category</label>

    <select name = "cars" id = "cars">

        <?php
            $sqlQuery = "SELECT * from category";
            $res = $conn->query($sqlQuery);

            while ($row=mysqli_fetch_object($res)){
                echo "<option value=\"$row->id\">$row->name</option>";
            }
        ?>
    </select>
    <br>

    <input type="text" placeholder="Enter Name" name="name">
    <br>
    <input type="text" placeholder="Enter Price" name="name">
    <br>
    <input type=submit>
        </form>