<?php
 
error_reporting(0);
 
$db_name = "id4709238_apogee";
$mysql_user = "id4709238_apogee";
$mysql_pass = "apogee(2018)";
$server_name = "localhost";
 
$con = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);
 
if(!$con){
    echo '{"message":"Unable to connect to the database."}';
}
 
?>