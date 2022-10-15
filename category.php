<?php
    require_once "dbconnect.php";
?>

<form action="willRecieveUserInput.php" method="post">
    <input type="text" placeholder="Category Name" name="name">
    <br>
    <input type="text" placeholder="Category Status" name="status">
    <br>

    <input type="submit">
    <a href="categoryIndex.php">CHECK INDEX</a>
</form>

<style>
    form,label,select,option {
        border:1px solid black;
    }

    form{
        border-collapse: collapse;
        width: 100%;
    }

    select,form{
        text-align:center;
    }

    a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    }

    a:hover, a:active {
    background-color: red;
    }
</style>