<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>

			<form action="update_cust_red.php" method="post">
				<p>Enter the ID of customer you want to update
					<input type="number" name="cust_id" value="" id="cust_id" />
				</p>
				<p>Customer New Name: 
					<input type="text" name="name" value="" id="name" />
				</p>
				<p>New Contact no: 
					<input type="number" name="contact" value="" id="contact" />
				</p>
				<p>New Email id: 
					<input type="text" name="emailid" value="" id="emailid" />
				</p>
				
				<input type="submit" value="Update Customer Info" />
			</form>
			
<?php require("includes/footer.php"); ?>
