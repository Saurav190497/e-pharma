

<?php
include_once('new.php'); 
    $id=$_GET['id'];
    $med_name=$manufacturer=$mfd=$expiry=$bar_code=$types=$med_quantity=$med_price="";
    $med_name = test_input($_POST['medName']);
    $manufacturer = test_input($_POST['Manufacturer']);
    $mfd = test_input($_POST['mfd']);
    $expiry = test_input($_POST['expiry']);
    $bar_code = test_input($_POST['barcode']);
    $types = test_input($_POST['types']);
    $med_quantity = test_input($_POST['quantity']);
    $med_price = test_input($_POST['price']);
  
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
       $sql = "UPDATE addstocks SET med_name= '$med_name' , manufacturer='$manufacturer', 
              mfd='$mfd',bar_code= '$bar_code',expiry='$expiry',types='$types',med_quantity='$med_quantity',med_price='$med_price'
              WHERE med_id= '$id'";
              
              $result= mysqli_query($conn,$sql);
     
  if (isset($result)){
   
      //header("location:show.php");
     }

?>
