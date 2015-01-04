<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php
	$cust_id = $_POST['cust_id'];
	$vaistsize = $_POST['vaistsize'];
	$collarsize = $_POST['collarsize'];
	$chestsize = $_POST['chestsize'];
	$shirtlength = $_POST['shirtlength'];
	$kameezlength = $_POST['kameezlength'];
	$sleeveslength = $_POST['sleeveslength'];
	$shouldersize = $_POST['shouldersize'];
	$lowerlength = $_POST['lowerlength'];
	$lowercollarsize = $_POST['lowercollarsize'];
	?>

<?php


	//inserting values into customer table
	$query = "UPDATE size SET 
				size_vaist = {$vaistsize},
				size_collar = {$collarsize},
				size_chest = {$chestsize},
				size_shirtlength = {$shirtlength},
				size_kameezlength = {$kameezlength},
				size_sleeves = {$sleeveslength},
				size_shoulder = {$shouldersize},
				size_lowerlength = {$lowerlength},
				size_lowercollar = {$lowercollarsize}
				WHERE size_order_pk = (SELECT corder_id FROM customerorder WHERE corder_cust_pk = {$cust_id})
			";
	$result = mysql_query($query, $connection);

	if ($result) {
		// Success!
		//returning back to the new_customer page
	echo "Customer info successfully updated!";
	echo "<br/>";
	echo "<a href=\"update_size.php\"'>Go Back</a>";
	} else {
		// Display error message.
		echo "<p>Subject creation failed.</p>";
		echo "<p>" . mysql_error() . "</p>";
	}
	
	
	?>
<?php mysql_close($connection); ?>