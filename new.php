<?php
$host="localhost";
$user="root";
$password="";
$db="office_management";
$conn = mysqli_connect($host ,$user, $password, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "Select * from employee where name= 'manish'";

$result = mysqli_query($conn, $sql);

if ($result) {

	while ( $row = $result->fetch_assoc()){

		echo $row['name']; echo "<br>";
		echo $row['phone']; echo "<br>";
		echo $row['date']; echo "<br>";

}
}
  echo "my post variable is:"; echo $_POST['username'];
?>