<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php
	$cust_id = $_POST['cust_id'];
	$collarstyle = $_POST['collarstyle'];
	$stitchingstyle = $_POST['stitchingstyle'];
	$bottomstyle = $_POST['bottomstyle'];
	$cuffstyle = $_POST['cuffstyle'];
	$pocketstyle = $_POST['pocketstyle'];
	$frontstyle = $_POST['frontstyle'];
	$lowerstyle = $_POST['lowerstyle'];
	$customstyle = $_POST['customstyle'];
	?>

<?php


	//inserting values into customer table
	$query = "UPDATE style SET 
				style_collar = '{$collarstyle}',
				style_stitching = '{$stitchingstyle}',
				style_bottom = '{$bottomstyle}',
				style_cuff = '{$cuffstyle}',
				style_pocket = '{$pocketstyle}',
				style_front = '{$frontstyle}',
				style_lower = '{$lowerstyle}',
				style_custom = '{$customstyle}'
				WHERE style_order_pk = (SELECT corder_id FROM customerorder WHERE corder_cust_pk = {$cust_id})
			";
	$result = mysql_query($query, $connection);

	if ($result) {
		// Success!
		//returning back to the new_customer page
	echo "Customer info successfully updated!";
	echo "<br/>";
	echo "<a href=\"update_style.php\"'>Go Back</a>";
	} else {
		// Display error message.
		echo "<p>Subject creation failed.</p>";
		echo "<p>" . mysql_error() . "</p>";
	}
	
	
	?>
<?php mysql_close($connection); ?>