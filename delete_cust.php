<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>

			<form action="delete_cust_red.php" method="post">
				<p>Enter the ID of customer you want to DELETE
					<input type="number" name="cust_id" value="" id="cust_id" />
				</p>
				<input type="submit" value="Confirm DELETE!" />
			</form>
			
<?php require("includes/footer.php"); ?>
