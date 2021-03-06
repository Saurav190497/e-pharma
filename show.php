<?php
include_once('new.php');
include_once('style.php');
$show = "SELECT * FROM addstocks";
$result = mysqli_query($conn,$show);
?>
<!DOCTYPE html>  
<html>   
<body>
	<div class="container my-2">
		<table border="5" align="center"  id="table"> 
			<tr style="background-color:tomato; font-family:courier">  
				<th align="center" width="5%">ID</th>  
				<th align="center" width="5%">Medicine Name</th>  
				<th align="center" width="10%">Manufacturer</th>  
				<th align="center" width="5%">Mfd</th>  
				<th align="center" width="5%">Expiry</th>
				<th align="center" width="8%">Bar code</th>
				<th align="center" width="8%">Types</th>
				<th align="center" width="8%">Quantity</th>
				<th align="center" width="8%">Price</th>
				<th align="center" width="8%">Action</th>  
			</tr>  
			<?php while($row = mysqli_fetch_array($result)){ ?>  
				<tr style="background-color:Lightyellow">  
					<td align="center"><?php echo $row["med_id"]; ?></td>  
					<td align="center"><?php $med_name = $row["med_name"]; echo $med_name; ?></td>  
					<td align="center"><?php echo $row["manufacturer"]; ?></td>  
					<td align="center"><?php echo $row["mfd"]; ?></td>  
					<td align="center"><?php echo $row["expiry"]; ?></td>
					<td align="center"><?php echo $row["bar_code"]; ?></td>
					<td align="center"><?php echo $row["types"]; ?></td>
					<td align="center"><?php echo $row["med_quantity"]; ?></td>
					<td align="center"><?php echo $row["med_price"]; ?></td>
					<td align="center">
						<a href="update_form.php?id=<?php echo $row["med_id"]; ?>"><img src="pen.svg" ></a>
						<img data-bs-toggle="modal" data-bs-target="#delete<?php echo $row["med_id"]; ?>" src="del.svg" >
						<!-- Modal -->
						<div class="modal fade" id="delete<?php echo $row["med_id"]; ?>" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="deleteLabel">Confirm!</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">Are You Sure to Delete <b><?php echo $med_name; ?></b> Permanently?</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
										<form method="post" action="delete.php">
											<input type="hidden" name="medicineID" value="<?php echo $row["med_id"]; ?>">
											<button type="submit" name="delete" class="btn btn-primary">Yes</button>.
										</form>
									</div>
								</div>
							</div>
						</div>
					</td>
				</tr> 
			<?php } ?>  
		</table> 
		<form action="addstocksform.php" method="post">
			<br/>
			<div style="text-align:right" class="form-group">
				<button type="submit" style="background-color:LightBlue; font-family:courier; font-color:cornsilk; margin-right:5px" name="add" ><p style="color:white">Add More</p></button>
			</div>
		</form>
	</div>
</body>
</html>