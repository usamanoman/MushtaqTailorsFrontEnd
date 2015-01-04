<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php
	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$emailid = $_POST['emailid'];
	$duedate = $_POST['duedate'];
	$qty = $_POST['qty'];
	$vaistsize = $_POST['vaistsize'];
	$collarsize = $_POST['collarsize'];
	$chestsize = $_POST['chestsize'];
	$shirtlength = $_POST['shirtlength'];
	$kameezlength = $_POST['kameezlength'];
	$sleeveslength = $_POST['sleeveslength'];
	$shouldersize = $_POST['shouldersize'];
	$lowerlength = $_POST['lowerlength'];
	$lowercollarsize = $_POST['lowercollarsize'];
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
/*	
	echo "
	vaist size = {$vaistsize} </br>
	chest size = {$chestsize} </br>
	shirtlength = {$shirtlength} </br>
	kameezlength = {$kameezlength} </br>
	sleeveslength = {$sleeveslength} </br>
	shouldersize = {$shouldersize} </br>
	lowerlength = {$lowerlength} </br>
	lowercollarsize = {$lowercollarsize} </br>
	collarstyle = {$collarstyle} </br>
	stitchingstyle = {$stitchingstyle} </br>
	bottomstyle = {$bottomstyle} </br>
	cuffstyle =  {$cuffstyle}</br>
	pocketstyle =  {$pocketstyle}</br>
	frontstyle =  {$frontstyle}</br>
	lowerstyle =  {$lowerstyle}</br>
	customstyle =  {$customstyle}</br>
	";
*/

	//inserting values into customer table
	$query = "INSERT INTO customer (
				cust_name, cust_contact, cust_email
			) VALUES (
				'{$name}', {$contact}, '{$emailid}'
			)";
	$result = mysql_query($query, $connection);
	
	//Getting the cust_id of the new customer for order table as PK
	$tasker = "SELECT cust_id FROM customer WHERE cust_name = '{$name}'";
	$result5 = mysql_query($tasker, $connection);
	while ($row = mysql_fetch_array($result5)) {
		$searched_cust_id = $row[0];
	}

	//Selecting current date
	$currentdate = mysql_query("SELECT CURDATE()", $connection);
	while ($row = mysql_fetch_array($currentdate)) {
		$date_extracted = $row[0];
	}

	//inserting values into order table
	$query3 = "INSERT INTO customerorder (
				corder_cust_pk, corder_date, corder_duedate, corder_qty
			) VALUES (
				{$searched_cust_id}, '{$date_extracted}', '{$duedate}', {$qty}
			)";
	$result3 = mysql_query($query3, $connection);

	//Getting the corder_id of the new customer for size table as PK
	$tasker = "SELECT corder_id FROM customerorder WHERE corder_cust_pk = '{$searched_cust_id}'";
	$order_selected_id = mysql_query($tasker, $connection);
	while ($row = mysql_fetch_array($order_selected_id)) {
		$searched_order_id = $row[0];
	}

	//inserting values into size table
	$query3 = "INSERT INTO size (
				size_order_pk, size_vaist, size_collar, size_chest, size_shirtlength, size_kameezlength, size_sleeves, size_shoulder, size_lowerlength, size_lowercollar
			) VALUES (
				{$searched_order_id}, {$vaistsize}, {$collarsize}, {$chestsize}, {$shirtlength}, {$kameezlength}, {$sleeveslength}, {$shouldersize}, {$lowerlength}, {$lowercollarsize}
			)";
	$result3 = mysql_query($query3, $connection);

/*	//Getting the size_id of the new customer for style table as PK
	$tasker = "SELECT size_id FROM size WHERE size_order_pk = '{$searched_order_id}'";
	$size_selected_id = mysql_query($tasker, $connection);
	while ($row = mysql_fetch_array($size_selected_id)) {
		$searched_size_id = $row[0];
	} */

	//Getting the corder_id of the new customer for size table as PK
	$tasker = "SELECT corder_id FROM customerorder WHERE corder_cust_pk = '{$searched_cust_id}'";
	$order_selected_id = mysql_query($tasker, $connection);
	while ($row = mysql_fetch_array($order_selected_id)) {
		$searched_order_id = $row[0];
	}
	
	//inserting values into size table
	$query4 = "INSERT INTO style (
				style_order_pk, style_collar, style_stitching, style_bottom, style_cuff, style_pocket, style_front, style_lower, style_custom
			) VALUES (
				{$searched_order_id}, '{$collarstyle}', '{$stitchingstyle}', '{$bottomstyle}', '{$cuffstyle}', '{$pocketstyle}', '{$frontstyle}', '{$lowerstyle}', '{$customstyle}'
			)";
	$result4 = mysql_query($query4, $connection);
?> 
	<?php
	//returning back to the new_customer page
	echo "Customer successfully added!";
	echo "<br/>";
	echo "<a href=\"new_customer.php\"'>Go Back</a>";
	?>
<?php mysql_close($connection); ?>