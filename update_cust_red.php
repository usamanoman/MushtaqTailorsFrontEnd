<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php
	$cust_id = $_POST['cust_id'];
	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$emailid = $_POST['emailid'];
	?>

<?php


	//inserting values into customer table
	$query = "UPDATE customer SET 
				cust_name = '{$name}',
				cust_contact = {$contact},
				cust_email = '{$emailid}'
				WHERE cust_id = {$cust_id}
			";
	$result = mysql_query($query, $connection);

	if ($result) {
		// Success!
		//returning back to the new_customer page
	echo "Customer info successfully updated!";
	echo "<br/>";
	echo "<a href=\"update_cust.php\"'>Go Back</a>";
	} else {
		// Display error message.
		echo "<p>Subject creation failed.</p>";
		echo "<p>" . mysql_error() . "</p>";
	}
	
	
	?>
<?php mysql_close($connection); ?>