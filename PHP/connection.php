<?php
$server = '185.185.85.130';
$username = "incplec2_incple";
$password = "#INC500]";
$db = 'incplec2_incple';
$con = mysqli_connect($server,$username,$password,$db);
if($con){
  echo "Database connect Successful";
}else{
  echo "Database connect Unsuccessful";
}
?>