<?php

if($_POST['submit'])
{
$username= $_POST['username'];
$name= $_POST['name'];
$mobile= $_POST['mobile'];
$address= $_POST['address'];
$date= $_POST['date'];
$In_time= $_POST['In_time'];
$Out_time= $_POST['Out_time'];

}



$servername = "localhost";
$username = "root";
$password = "";
$database = "visitor_management";

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else

{
	echo " connection successfully";
}
 
$sql = "INSERT INTO  visitors('name', 'meet_to', 'phone', 'address', 'In_time', 'Out_time')
VALUES ('$name', '$meet_to', '$phone', '$address', '$In_time', '$Out_time')";
if ($conn->query($sql) === TRUE) {
 
  echo "New record inserted successfully";
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;

$conn->close();
}
?>                                             

 