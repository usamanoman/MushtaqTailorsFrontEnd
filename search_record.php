<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>

			<form action="search_record_red.php" method="post">
				<p>Enter the ID of customer
					<input type="number" name="cust_id" value="" id="cust_id" />
				</p>
				<p> Search:
					<select name="search">
					  <option value="Customer Order">Customer Order</option>
					  <option value="Customer Order Style">Customer Order Style</option>
					  <option value="Customer Order Size">Customer Order Size</option>
					  <option value="Orders Pending">Orders Pending</option>
					  <option value="Orders In Process">Orders In Process</option>
					  <option value="Orders Ready">Orders Ready</option>
					  <option value="Orders Delivered">Orders Delivered</option>
					</select>
				</p>
				
				<input type="submit" value="Search" />
			</form>

			<br/><br/>

			<form action="search_status_red.php" method="post">
				<p> Search Status:
					<select name="search_status">
					  <option value="Orders Pending">Orders Pending</option>
					  <option value="Orders In Process">Orders In Process</option>
					  <option value="Orders Ready">Orders Ready</option>
					  <option value="Orders Delivered">Orders Delivered</option>
					</select>
				</p>
				
				<input type="submit" value="Search" />
			</form>

		<!--	<form action="update_status_red.php" method="post">
				<p>Enter the Customer Name
					<input type="number" name="cust_id" value="" id="cust_id" />
				</p>
				<p> Search:
					<select name="search">
					  <option value="Not in Process">Customer Order</option>
					  <option value="In process">Customer Order Style</option>
					  <option value="In process">Customer Order Size</option>
					  <option value="In process">Orders Pending</option>
					  <option value="In process">Orders In Process</option>
					  <option value="In process">Orders Ready</option>
					  <option value="In process">Orders Delivered</option>
					</select>
				</p>
				
				<input type="submit" value="Update status" />
			</form>

		-->
			
<?php require("includes/footer.php"); ?>
