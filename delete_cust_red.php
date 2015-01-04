<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php
	$cust_id = $_POST['cust_id'];
	?>
<?php
	
	$query = "DELETE FROM style 
				WHERE style_order_pk = (SELECT corder_id FROM customerorder WHERE corder_cust_pk = {$cust_id}) LIMIT 1
			";
	$result = mysql_query($query, $connection);

	$query = "DELETE FROM size 
				WHERE size_order_pk = (SELECT corder_id FROM customerorder WHERE corder_cust_pk = {$cust_id}) LIMIT 1
			";
	$result = mysql_query($query, $connection);

	$query = "DELETE FROM customerorder 
				WHERE corder_cust_pk = {$cust_id} LIMIT 1
			";
	$result = mysql_query($query, $connection);

	$query = "DELETE FROM customer 
				WHERE cust_id = {$cust_id} LIMIT 1
			";
	$result = mysql_query($query, $connection);

	if ($result) {
		// Success!
		//returning back to the new_customer page
	echo "Customer info successfully updated!";
	echo "<br/>";
	echo "<a href=\"delete_cust.php\"'>Go Back</a>";
	} else {
		// Display error message.
		echo "<p>Subject creation failed.</p>";
		echo "<p>" . mysql_error() . "</p>";
	}
	?>
<?php mysql_close($connection); ?>