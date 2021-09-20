<?php

$host="localhost";
$user="root";
$password="";
$db="visitor_management";
$conn = mysqli_connect($host ,$user, $password, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = $sql = "INSERT INTO visitors('name', 'meet_to', 'phone', 'address', 'in_time', 'out_time')
VALUES ('$name', '$meet_to', '$phone', '$address', '$in_time', '$out_time')";
$result = mysqli_query($conn, $sql);


$riya=122334456;

?>


