<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php
	$search_value = $_POST['search_status'];
	?>
<?php
	
	if ($search_value=="Orders Pending") {
		//echo "This is order pending";
		$query = "SELECT customer.cust_id, customerorder.corder_id, customer.cust_name, customer.cust_contact, customerorder.corder_date, customerorder.corder_duedate, customerorder.corder_process, customerorder.corder_ready, customerorder.corder_delivery, customerorder.corder_qty, customerorder.corder_amount
			FROM customer, customerorder WHERE customerorder.corder_process = 'Not in Process' AND customerorder.corder_cust_pk = customer.cust_id";
			
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

	elseif ($search_value=="Orders In Process") {
		//echo "ths is order in process";
		
		$query = "SELECT customer.cust_id, customerorder.corder_id, customer.cust_name, customer.cust_contact, customerorder.corder_date, customerorder.corder_duedate, customerorder.corder_process, customerorder.corder_ready, customerorder.corder_delivery, customerorder.corder_qty, customerorder.corder_amount
			FROM customer, customerorder WHERE customerorder.corder_process = 'In process' AND customerorder.corder_cust_pk = customer.cust_id";
			
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
	elseif ($search_value=="Orders Ready") {
		//echo "this is orders ready";
		$query = "SELECT customer.cust_id, customerorder.corder_id, customer.cust_name, customer.cust_contact, customerorder.corder_date, customerorder.corder_duedate, customerorder.corder_process, customerorder.corder_ready, customerorder.corder_delivery, customerorder.corder_qty, customerorder.corder_amount
			FROM customer, customerorder WHERE customerorder.corder_ready = 'Ready' AND customerorder.corder_cust_pk = customer.cust_id";
			
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
	elseif ($search_value=="Orders Delivered") {
		//echo "this is orders delivered";
		$query = "SELECT customer.cust_id, customerorder.corder_id, customer.cust_name, customer.cust_contact, customerorder.corder_date, customerorder.corder_duedate, customerorder.corder_process, customerorder.corder_ready, customerorder.corder_delivery, customerorder.corder_qty, customerorder.corder_amount
			FROM customer, customerorder WHERE customerorder.corder_delivery = 'Delivered' AND customerorder.corder_cust_pk = customer.cust_id";
			
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