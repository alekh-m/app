<?php
error_reporting(0);
require "init.php";

$city = $_POST["city"];
$turbidity = $_POST["turbidity"];
$ph = $_POST["ph"];
$date = $_POST["date"];


//!!!!!!!!!!IF NOT WORKING, CHECK WHETHER FLOAT AND DATE FORMATS ARE CREATING PROBLEMS!!!!!!!!!!
//$sql = "INSERT INTO `multipledata` (`id`,`city`, `turbidity`, `ph`, `date`) VALUES (NULL, '".$city."', '".$turbidity."', '".$ph."', '".$date."');";
$sql = "UPDATE `data` SET `turbidity`='".$turbidity."', `ph`='".$ph."', `date`='".$date."' WHERE `city`='".$city."';";
if(!mysqli_query($con, $sql)){
	echo '{"message":"Unable to save the data to the database."}';
}

?>