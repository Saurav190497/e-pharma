<?php
  include('style.php');
  $id= $_REQUEST['id'];
?>
<title>Update Stocks</title>
<body>
<form name="stocksadd" method="post" action="update.php?id=<?php echo $id; ?>">
<div class="container ">
  
    <div class="form-group col-sm-6">
      <label for="inputName4">Medicine Name</label>
      <label for="inputName" class="text-danger">*</label>
      <input type="text" class="form-control" name="medName" placeholder="Medicine Name" required>
    </div>
    <div class="form-group col-sm-6">
      <label for="inputcompany">Manufacturer</label>
      <label for="inputcompany" class="text-danger">*</label>
      <input type="text" class="form-control" name="Manufacturer" placeholder="Manufacturer Name" required>
    </div>
    <div class="form-group col-sm-6">
      <label for="inputmfd4">mfd</label>
      <label for="inputName" class="text-danger">*</label>
      <input type="Date" class="form-control" name="mfd" placeholder="manufacturing date" required>
  </div>
  <div class="form-group col-sm-6">
    <label for="inputexpirydate4">Expiry</label>
    <label for="inputName" class="text-danger">*</label>
    <input type="Date" class="form-control" name="expiry" placeholder="expiry date" required>
  </div>
  <div class="form-group col-sm-2">
      <label for="inputbarcode">Bar Code</label>
      <label for="inputName" class="text-danger">*</label>
      <input type="text" class="form-control" name="barcode" required>
    </div>
    <div class="form-group col-sm-4">
      <label for="inputtypes">Type</label>
      <label for="inputName" class="text-danger">*</label>
      <select name="types" class="custom-select" required>
        <option selected>select Types</option>
        <option value="Tablets">Tablets</option>
        <option value="Capsules">Capsules</option>
        <option value="Syrup">Syrup</option>
        <option value="Powder">Powder</option>
        <option value="Ointments">Ointments</option>
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputquantity">Quantity</label>
      <label for="inputName" class="text-danger">*</label>
      <input type="text" class="form-control" name="quantity" placeholder="Quantity" required>
      </div>
      <div class="form-group col-sm-3">
      <label for="inputprice">price</label>
      <label for="inputName" class="text-danger">*</label>
      <div class="input-group">
        <div class="input-group-prepend success">
          <div class="input-group-text text-light bg-dark">₹</div>
        </div>
      <input type="number" min="0.00"  step="0.01" class="form-control" name="price" placeholder="total costs" required>
      </div>
      </div>
      <div style="text-align:right; margin-top:20px" class="form-group ">
  <button type="reset" style="margin-right:16px" class=" btn btn-dark ">Reset</button>
  <button type="submit" style="margin-left:16px" name="update" class=" btn btn-success ">Update</button>

  </div>
  </div>
</form>
</body>