<?php
if(!isset($_POST['add']))
{ header("location:addstocksform.php"); }
    else
    {
include_once('new.php'); 
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

   

  $query ="INSERT INTO addstocks (med_name, manufacturer, mfd, expiry, bar_code, types, med_quantity, med_price)
  VALUES ('$med_name','$manufacturer','$mfd','$expiry','$bar_code','$types','$med_quantity','$med_price')";

  $add = mysqli_query($conn,$query);
  if(isset($add)){
  header("location:show.php");
      } 
    }
?>
  
    <!DOCTYPE html>
    <html>

    <body>
    <form action="show.php" method="post">
    <br/>
      <input type="submit" name="view" value="View Record">
    </form>
    </body>
    </html>