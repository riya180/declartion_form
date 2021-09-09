<?php
// database connection code
$host = "localhost";
$user = "root";
$password = "";
$database = "office_management";

$conn = new mysqli($host, $user,  " ", $office_management);

if ($conn->connect_error) {
	
    die("Connection failed: " . $conn->connect_error);
}


// get the post records

$txtid = $_POST['txtid'];
$txtnmae = $_POST['txtname'];
$txtPhone = $_POST['txtPhone'];
$txtdate = $_POST['txtdate'];

// database insert SQL code
$sql = "INSERT INTO `employee` (`Id`, `fldName`, `fldPhone`, `flddate`) VALUES ('txtid', '$txtName', '$txtPhone', '$txtdate')";

if ($conn->query($sql) === TRUE) 
{

	echo "Contact Records Inserted";
}

else
{
	echo "contact record is not inserted";
}

?>