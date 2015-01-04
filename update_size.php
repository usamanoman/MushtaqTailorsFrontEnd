<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>

			<form action="update_size_red.php" method="post">
				<p>Enter the ID of customer you want to update
					<input type="number" name="cust_id" value="" id="cust_id" />
				</p>
				<p>Vaist Size: 
					<input type="number" name="vaistsize" value="" id="vaistsize" />
				</p>
				<p>Collar Size: 
					<input type="number" name="collarsize" value="" id="collarsize" />
				</p>
				<p>Chest Size: 
					<input type="number" name="chestsize" value="" id="chestsize" />
				</p>
				<p>Shirt Length: 
					<input type="number" name="shirtlength" value="" id="shirtlength" />
				</p>
				<p>Kameez Length: 
					<input type="number" name="kameezlength" value="" id="kameezlength" />
				</p>
				<p>Sleeves Length: 
					<input type="number" name="sleeveslength" value="" id="sleeveslength" />
				</p>
				<p>Shoulder size: 
					<input type="number" name="shouldersize" value="" id="shouldersize" />
				</p>
				<p>Lower Length: 
					<input type="number" name="lowerlength" value="" id="lowerlength" />
				</p>
				<p>Lower Collar Size: 
					<input type="number" name="lowercollarsize" value="" id="lowercollarsize" />
				</p>
				<input type="submit" value="Update size Info" />
			</form>
			
<?php require("includes/footer.php"); ?>
