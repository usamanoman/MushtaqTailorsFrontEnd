<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>

			<form action="update_status_red.php" method="post">
				<p>Enter the ID of customer you want to update
					<input type="number" name="cust_id" value="" id="cust_id" />
				</p>
				<p> Select Processing Status:
					<select name="process">
					  <option value="Not in Process">Not in Process</option>
					  <option value="In process">In process</option>
					</select>
				</p>
				<p>Select Ready Status:
					<select name="ready">
					  <option value="Not Ready">Not Ready</option>
					  <option value="Ready">Ready</option>
					</select>
				</p>
				<p> Select Delivery Status:
					<select name="delivery">
					  <option value="Not Delivered">Not Delivered</option>
					  <option value="Delivered">Delivered</option>
					</select>
				</p>
				<p>Enter Total Amount: 
					<input type="number" name="amount" value="" id="amount" />
				</p>
				<input type="submit" value="Update status" />
			</form>
			
<?php require("includes/footer.php"); ?>
