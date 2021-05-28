<?php
    include 'conn.php';
?>
<?php

    $category = $_POST['category'];

    $insert_query="insert into tblcategory (category) values('".$category."');";

    if(mysqli_query($conn,$insert_query))
    {

        echo  "😀 New Category Added!";

    }
    else{

        echo "🤔 Oops!";

    }
?>