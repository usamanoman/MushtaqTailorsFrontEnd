<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php
	$cust_id = $_POST['cust_id'];
	$process = $_POST['process'];
	$ready = $_POST['ready'];
	$delivery = $_POST['delivery'];
	$amount = $_POST['amount'];
	?>
<?php
	//inserting values into customer table
	$query = "UPDATE customerorder SET 
				corder_ready = '{$ready}',
				corder_process = '{$process}',
				corder_delivery = '{$delivery}',
				corder_amount = '{$amount}'
				WHERE corder_cust_pk = {$cust_id}
			";
	$result = mysql_query($query, $connection);

	if ($result) {
		// Success!
		//returning back to the new_customer page
	echo "Customer info successfully updated!";
	echo "<br/>";
	echo "<a href=\"update_status.php\"'>Go Back</a>";
	} else {
		// Display error message.
		echo "<p>Subject creation failed.</p>";
		echo "<p>" . mysql_error() . "</p>";
	}
	?>
<?php mysql_close($connection); ?>