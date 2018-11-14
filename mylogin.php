<?php
error_reporting(0);
require "init.php";
 
 //Initialize variables
$username = $_POST["username"];
$password = $_POST["password"];
 
//$name = "sdf";
//$password = "sdf";
 
 //Select Query
$sql = "SELECT * FROM `user` WHERE `username`='".$username."' AND `password`='".$password."';";
 
 //Execute the query: returns array of records
$result = mysqli_query($con, $sql);
 
 //initialize array
$response = array();
 
 //store result in response array
while($row = mysqli_fetch_array($result)){
    $response = array("id"=>$row[0],"username"=>$row[1],"password"=>$row[2]);
}

//output
echo json_encode(array("user_data"=>$response));
 
?>