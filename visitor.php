<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login form</title>
	<link rel="stylesheet" type="text/css" href="visitor-stylesheet.css">
	<!--<a href="page/submit.html"></a>-->
</head>
<body>
	<div class="backimg">
	<div class="center">
		<img src="visitor.png" id="profilepic">
		<h2>Welcome to indovision service</h2>


		<form action="visitor_page.php" method="post"> 
		<div>
			<br>
			<label><h3>NAME</h3></label>
			<input type="text" name="username" class="inputbox" placeholder="">
			</div>
			<br>

		   <div>
			<br>
			<label><h3>MEET_TO</h3></label>
			<input type="text" name="name" class="inputbox" placeholder="">
		</div>
		<br>
		<div>
			<br>
			<label><h3>PHONE</h3></label>
			<input type="number" name="mobile" class="inputbox" placeholder="">
		</div>

		<div>
			<br>
			<label><h3>ADDRESS</h3></label>
			<input type="text" name="address" class="inputbox" placeholder="">
		</div>
		<br>


		<div>
			<br>
			<label><h3>DATE</h3></label>
			<input type="date" name="date" class="inputbox">
		</div>
		<br>

		<div>
			<br>
			<label><h3>IN_TIME</h3></label>
			<input type="Time" name="In_time" class="inputbox">
		</div>
		<br>

		<div>
			<br>
             <label><h3>OUT_TIME</he></label>
			<input type="Time" name="Out_time" class="inputbox" placeholder="">
		</div>
		<br>

		<div>
			<br>
			<input type="submit" value="submit" name="submit">
			
     
		</div>
		<br>
	</form>

	</div>	
	</div>

</body>
</html>

