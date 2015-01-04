<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>

			<form action="create_newcustomer.php" method="post">
				<p>Customer Name: 
					<input type="text" name="name" value="" id="name" />
				</p>
				<p>Contact no: 
					<input type="number" name="contact" value="" id="contact" />
				</p>
				<p>Email id: 
					<input type="text" name="emailid" value="" id="emailid" />
				</p>
				<br/>
				<br/>
				<p>Due Date: 
					<input type="text" name="duedate" value="" id="duedate" />
				</p>
				<p>Quantity: 
					<input type="number" name="qty" value="" id="qty" />
				</p>
				<br/>
				<br/>
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
				<br/>
				<br/>
				<p>Collar Style: 
					<input type="text" name="collarstyle" value="" id="collarstyle" />
				</p>
				<p>Stitching Style: 
					<input type="text" name="stitchingstyle" value="" id="stitchingstyle" />
				</p>
				<p>Bottom Style: 
					<input type="text" name="bottomstyle" value="" id="bottomstyle" />
				</p>
				<p>Cuff Style: 
					<input type="text" name="cuffstyle" value="" id="cuffstyle" />
				</p>
				<p>Pocket Style: 
					<input type="text" name="pocketstyle" value="" id="pocketstyle" />
				</p>
				<p>Front Style: 
					<input type="text" name="frontstyle" value="" id="frontstyle" />
				</p>
				<p>Lower Style: 
					<input type="text" name="lowerstyle" value="" id="lowerstyle" />
				</p>
				<p>Custom Style: 
					<textarea type="text" name="customstyle" value="" id="customstyle"></textarea>
				</p>

				<input type="submit" value="Add new Customer" />
			</form>
			
<?php require("includes/footer.php"); ?>
