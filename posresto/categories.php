<?php
    include 'conn.php';
?>
<?php
// Select all of our categories from table 'tblcategory'
$sql = "SELECT * FROM tblcategory";
 
// Confirm there are results
if ($result = mysqli_query($conn, $sql))
{
 // We have results, create an array to hold the results
        // and an array to hold the data
 $resultArray = array();
 $tempArray = array();
 
 // Loop through each result
 while($row = $result->fetch_object())
 {
 // Add each result into the results array
 $tempArray = $row;
     array_push($resultArray, $tempArray);
 }
 
 // Encode the array to JSON and output the results
 echo json_encode(['categories' => $resultArray]);
 
 //$output = json_encode(['kitten' => $result]);
}

?>