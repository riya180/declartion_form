<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login form</title>
	<link rel="stylesheet" type="text/css" href="style-sheet.css">
	<!--<a href="page/submit.html"></a>-->
</head>
<body>
	<div class="backimg">
	<div class="center">
		<img src="visitor.png" id="profilepic">
		<h2>Welcome to indovision service</h2>


		<form  method="post" action="checkin.php"> 
		<div>
			<br>
			<label><h3>Name</h3></label>
			<input type="text" name="username" class="inputbox" placeholder="Enter Username">
			</div>
			<br>

		   <div>
			<br>
			<label><h3>Phone</h3></label>
			<input type="number" name="mobile" class="inputbox" placeholder="Phone">
		</div>
		<br>

		<div>
			<br>
			<label><h3>Date</h3></label>
			<input type="date" name="date" class="inputbox">
		</div>
		<br>

		<div>
			<input type="submit" value="submit" name="submit">
			
     
		</div>
		<br>
	</form>

	</div>	
	</div>

</body>
</html>


