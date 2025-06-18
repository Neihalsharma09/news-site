<?php
include "config.php";
$category_id = $_GET['id'];
$sql = "DELETE FROM category WHERE category_id = '$category_id'";
if (mysqli_query($conn,$sql)) {
   header("Location: {$hostname}/admin/category.php");
}else{
    echo "<p style = color:red; text-align:center; margin: 10px 0 > Can't delete this category</p>";
}
mysqli_close($conn);

?>