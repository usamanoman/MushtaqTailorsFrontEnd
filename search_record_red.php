<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php
	$cust_id = $_POST['cust_id'];
	$search_value = $_POST['search'];
	?>
<?php
	
	if ($search_value=="Customer Order")
	{
		//echo "This is customerorder";
		$query = "SELECT customer.cust_id, customerorder.corder_id, customer.cust_name, customer.cust_contact, customerorder.corder_date, customerorder.corder_duedate, customerorder.corder_process, customerorder.corder_ready, customerorder.corder_delivery, customerorder.corder_qty, customerorder.corder_amount
			FROM customer, customerorder WHERE customerorder.corder_cust_pk = {$cust_id} AND customer.cust_id = {$cust_id}";
			
		$result = mysql_query($query, $connection);

		echo "<table class='table table-hover'>";
		echo "<thead>
		<tr>
		<th>Customer ID</th>
		<th>Order ID</th>
		<th>Name</th>
		<th>Contact</th>
		<th>Order Date</th>
		<th>Due Date</th>
		<th>Process</th>
		<th>Ready</th>
		<th>Delivery</th>
		<th>Quantity</th>
		<th>Amount</th>
		</tr>
		</thead>";
		while($row = mysql_fetch_array($result))
		{
			
			echo "<tr>
			<th>{$row[cust_id]}</th>
			<th>{$row[corder_id]}</th>
			<th>{$row[cust_name]}</th>
			<th>{$row[cust_contact]}</th>
			<th>{$row[corder_date]}</th>
			<th>{$row[corder_duedate]}</th>
			<th>{$row[corder_process]}</th>
			<th>{$row[corder_ready]}</th>
			<th>{$row[corder_delivery]}</th>
			<th>{$row[corder_qty]}</th>
			<th>{$row[corder_amount]}</th>
			</tr>";
			
		}
		echo "</table>";
		if ($result) {
		// Success!
			//Returning back
		echo "<br/>";
		echo "<a href=\"search_record.php\"'>Go Back</a>";
		} else {
			// Display error message.
			echo "<p>Subject creation failed.</p>";
			echo "<p>" . mysql_error() . "</p>";
		}
	}
	elseif ($search_value=="Customer Order Style")
	{
		//echo "this is customerorder style";
		$query = "SELECT customer.cust_id, customer.cust_name,style.style_collar, style.style_stitching, style.style_bottom, style.style_cuff, style.style_pocket, style.style_front, style.style_lower, style.style_custom  
					FROM customer, style 
					WHERE customer.cust_id = {$cust_id} AND style.style_order_pk = (SELECT corder_id from customerorder WHERE corder_cust_pk = {$cust_id})";
			
		$result = mysql_query($query, $connection);

		echo "<table class='table table-hover'>";
		echo "<thead>
		<tr>
		<th>Customer ID</th>
		<th>Name</th>
		<th>Collar Style</th>
		<th>Stitching Style</th>
		<th>Bottom Style</th>
		<th>Cuff Style</th>
		<th>Pocket Style</th>
		<th>Front Style</th>
		<th>Lower Style</th>
		<th>Custom Style</th>
		</tr>
		</thead>";
		while($row = mysql_fetch_array($result))
		{
			
			echo "<tr>
			<th>{$row[cust_id]}</th>
			<th>{$row[cust_name]}</th>
			<th>{$row[style_collar]}</th>
			<th>{$row[style_stitching]}</th>
			<th>{$row[style_bottom]}</th>
			<th>{$row[style_cuff]}</th>
			<th>{$row[style_pocket]}</th>
			<th>{$row[style_front]}</th>
			<th>{$row[style_lower]}</th>
			<th>{$row[style_custom]}</th>
			</tr>";
			
		}
		echo "</table>";
		if ($result) {
		// Success!
			//Returning back
		echo "<br/>";
		echo "<a href=\"search_record.php\"'>Go Back</a>";
		} else {
			// Display error message.
			echo "<p>Subject creation failed.</p>";
			echo "<p>" . mysql_error() . "</p>";
		}
	}
	elseif ($search_value=="Customer Order Size") {
		//echo "This is order size";
		$query = "SELECT customer.cust_id, customer.cust_name,size.size_collar, size.size_vaist, size.size_chest, size.size_shirtlength, size.size_kameezlength, size.size_sleeves, size.size_shoulder, size.size_lowerlength, size.size_lowercollar 
					FROM customer, size 
					WHERE customer.cust_id = {$cust_id} AND size.size_order_pk = (SELECT corder_id from customerorder WHERE corder_cust_pk = {$cust_id})";
			
		$result = mysql_query($query, $connection);

		echo "<table class='table table-hover'>";
		echo "<thead>
		<tr>
		<th>Customer ID</th>
		<th>Name</th>
		<th>Collar Size</th>
		<th>Vaist Size</th>
		<th>Chest Size</th>
		<th>Shirt Length</th>
		<th>kameez Length</th>
		<th>Sleeves Size</th>
		<th>Shoulder Size</th>
		<th>Lower Length</th>
		<th>Lower Collar size</th>
		</tr>
		</thead>";
		while($row = mysql_fetch_array($result))
		{
			
			echo "<tr>
			<th>{$row[cust_id]}</th>
			<th>{$row[cust_name]}</th>
			<th>{$row[size_collar]}</th>
			<th>{$row[size_vaist]}</th>
			<th>{$row[size_chest]}</th>
			<th>{$row[size_shirtlength]}</th>
			<th>{$row[size_kameezlength]}</th>
			<th>{$row[size_sleeves]}</th>
			<th>{$row[size_shoulder]}</th>
			<th>{$row[size_lowerlength]}</th>
			<th>{$row[size_lowercollar]}</th>
			</tr>";
			
		}
		echo "</table>";
		if ($result) {
		// Success!
			//Returning back
		echo "<br/>";
		echo "<a href=\"search_record.php\"'>Go Back</a>";
		} else {
			// Display error message.
			echo "<p>Subject creation failed.</p>";
			echo "<p>" . mysql_error() . "</p>";
		}
	}
	
/*
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
	} */
	?> 
<?php mysql_close($connection); ?>