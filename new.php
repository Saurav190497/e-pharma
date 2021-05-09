<?php $servername='localhost';
$usename='root';
$password='';
$database="epharma";
$conn=mysqli_connect($servername,$usename,$password,$database);
if(!$conn)
{
  echo("plz check again!! connection was not successful");
}
?>