<?php
    include 'conn.php';
?>
<?php

$description = $_POST['description'];

$price = $_POST['price'];

$category = $_POST['category'];

$status = $_POST['status'];

$insert_query="insert into tblproduct (description,price,category,image,status) values('".$description."','".$price."','".$category."','".$image."','".$status."');";

if(mysqli_query($conn,$insert_query)){

echo  "😀 New Product Added!";

}else{

echo "🤔 Oops!";

}
?>