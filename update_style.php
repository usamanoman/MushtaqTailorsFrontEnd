<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>

			<form action="update_style_red.php" method="post">
				<p>Enter the ID of customer you want to update
					<input type="number" name="cust_id" value="" id="cust_id" />
				</p>
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
				<input type="submit" value="Update style Info" />
			</form>
			
<?php require("includes/footer.php"); ?>
