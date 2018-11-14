<?php
error_reporting(0);
require "init.php";
 
 //Initialize variables
$city = $_POST["city"];
 
//$name = "sdf";
//$password = "sdf";
 
 //Select Query
$sql = "SELECT * FROM `data` WHERE `city`='".$city."';";
 
 //Execute the query: returns array of records
$result = mysqli_query($con, $sql);
 
 //initialize array
$response = array();
 
 //store result in response array
while($row = mysqli_fetch_array($result)){
    $response = array("id"=>$row[0],"city"=>$row[1],"turbidity"=>$row[2],"ph"=>$row[3],"date"=>$row[4]);
}

//output
echo json_encode(array("city_data"=>$response));
 
?>