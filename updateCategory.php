<?php
    require_once "dbconnect.php";
    $catID = $_GET['id'];

    $sqlQuery = "SELECT * from category WHERE categoryID = $catID";
    $res = $conn->query($sqlQuery);
    $row = mysqli_fetch_object($res);
    if($_POST){
        $kawName = $_POST['name'];
        $kawStatus = $_POST['status'];
        $sql = "UPDATE category SET categoryName='$kawName', status='$kawStatus' WHERE categoryID='$catID'";
        if($conn->query($sql))
            header('Location:categoryindex.php');
        else
            echo "Error occured";
    }
?>

<form action="" method="post">
    <input type="text" placeholder="Enter Category name" name="name" value="<?php echo $row->categoryName ?>">
    <br>
    <input type="text"  name="status" placeholder="Enter category status" value="<?php echo $row->status?>">
    <br>
    <input type="submit">
</form>