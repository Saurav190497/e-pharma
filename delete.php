<?php
include_once('new.php');
$id = $_POST['medicineID'];
$sql = "DELETE FROM addstocks WHERE med_id= '$id'";
$result= mysqli_query($conn,$sql);
if (isset($result)){
	echo"hello";
	header("location:show.php");
}         
?>