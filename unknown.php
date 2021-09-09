<?php	
$NAME= $_POST['NAME'];
$MEET_TO= $_POST['MEET_TO'];
$PHONE= $_POST['PHONE'];
$ADDRESS= $_POST['ADDRESS'];
$DATE= $_POST['DATE'];
$IN_TIME= $_POST['IN_TIME'];
$OUT_TIME= $_POST['OUT_TIME'];

$conn =new mysqli_connect('localhost', 'root', '', 'visitor_management');
if ($conn->connect_error) {
  die('Connection failed:' .$conn->connect_error);

}else{
	$stmt =$conn->prepare("insert into visitors(NAME, MEET_TO, PHONE, ADDRESS, IN_TIME, OUT_TIME) values(?,?,?,?,?,?)");
	$stmt->bind_param("ssssss", $NAME, $MEET_TO, $PHONE, $ADDRESS, $DATE, $IN_TIME, $OUT_TIME);
	$stmt->execute();
	echo "Login successfully.....";
	$stmt->close();
	$conn->close();
}


?> 