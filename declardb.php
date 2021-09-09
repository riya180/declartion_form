<?php

  if($_POST['submit']) {
   // ($_SERVER['REQUEST_METHOD'] == 'POST')
     //print_r is used data print on the server page
	// print_r($_POST); die;
	$emp_code1 = $_POST['emp_code1'];
	$insur_no = $_POST['insur_no'];
	$name = $_POST['name'];
	$fathername = $_POST['fathername'];
	$date =$_POST['date'];
	$martial =$_POST['martial'];
	$gender =$_POST['gender'];
	$pre_add = $_POST['pre_add'];
	$pin_code = $_POST['pin_code'];
	$email = $_POST['email'];
    $per_add = $_POST['per_add'];
	$pin_code1 = $_POST['pin_code1'];
	$email1 = $_POST['email1'];
	$branch = $_POST['branch'];
	$dispens = $_POST['dispens'];
	$date_appoint = $_POST['date_appoint'];
	$emp_add = $_POST['emp_add'];
	$prev_insur = $_POST['prev_insur'];
	$Emplrs_code1 = $_POST['Emplrs_code1'];
    $name_add_emp = $_POST['name_add_emp'];
    $nominee = $_POST['nominee'];
    $relation = $_POST['relation'];
    $address = $_POST['address'];
    $sign_emp = $_POST['sign_emp'];
    $sign_seal = $_POST['sign_seal'];
    $sign_it_ip =$_POST['sign_it_ip'];
    $name1 = $_POST['name1'];
    $date1= $_POST['date1'];
    $relation_per = $_POST['relation_per'];
    $residing = $_POST['residing'];
    $places = $_POST['places'];

    $tem_name = $_POST['tem_name'];
    $ins_no =$_POST['ins_no'];
    $date_entry = $_POST['date_entry'];
    $fath_hus = $_POST['fath_hus'];
    $date_birth1 = $_POST['date_birth1'];
    $branch2 = $_POST['branch2'];
    $name_add =$_POST['name_add'];
    $Despensnary= $_POST['Despensnary'];
    $valid_date = $_POST['valid_date'];
    $sign_ti = $_POST['sign_ti'];
    $sign_bm = $_POST['sign_bm'];
    $date_allot = $_POST['date_allot'];
    $date_tic = $_POST['date_tic'];
    $manager_sign = $_POST['manager_sign'];
    $dis_name = $_POST['dis_name'];
    //$submit =$_POST['submit'];


$servername ="localhost";
$username = "root";
$passward = "";
$database ="declar_db";

//create a connectionsss
$conn = mysqli_connect($servername, $username, $passward,$database);
//Die if condtion was not successful
    if(!$conn){
	die("sorry we failed to connect:". mysqli_connect_error());

}
else{

echo "connection was successful<br>";
 }


$sql = "INSERT INTO `dlf_persons` (`empl_code_no`, `insurance_no`, `name`, `father/hus_name`, `date_of_birth`, `martial_status`, `gender`   ) VALUES ('$emp_code1', '$insur_no', '$name', '$fathername', '$date', '$martial', '$gender');";


  $sql .="INSERT INTO `dlf_employee` (`empl_code_no`, `date_of_appointment`, `address_of_emp`, `prev_ins_no`, `prev_empl_code_no`, `prev_add_of_emp`, `Name_nominee`, `relation_insur_person`, `address`, `sign_emp`, `sign_seal`, `sign_it_ip`) VALUES ('$emp_code1', '$date_appoint ','$emp_add', '$prev_insur', '$Emplrs_code1', '$name_add_emp','$nominee', '$relation', '$address', '$sign_emp ', '$sign_seal','$sign_it_ip');";
  
      foreach ($name1 as $key => $value) {
     $sql .= "INSERT INTO `dlf_family` (`empl_code_no`, `name`, `date_of_birth`, `relation`, `whether_residing_with`, `residence`) VALUES ('$emp_code1', '".$value. "', '".$date1[$key]."','".$relation_per[$key]."','".$residing[$key]."','".$places[$key]."');";
}
     $sql .= "INSERT INTO `dlf_esic_card`(`name`, `insur_no`, `father_husb-name`, `branch_office`, `name_add`, `date_entry`, `date_birth`, `despensary`, `valid_date`, `sign_it_ip`, `sign_seal`, `empl_code_no`) VALUES (' $tem_name','$ins_no',  '$fath_hus',' $branch2','$name_add',  '$date_entry', ' $date_birth1','$Despensnary', '$valid_date', '$sign_ti', '$sign_bm ',  '$emp_code1');";

     $sql .= "INSERT INTO `dlf_branch`(`allot_date`, `issue_date`, `name_disp`, `manager_sign`, `empl_code_no`) VALUES ('$date_allot',' $date_tic', '$dis_name','$manager_sign','$emp_code1')"; 

	 $result = mysqli_multi_query($conn,$sql);
	if($result){
		 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> Successfull!</strong> Your Entry  has been sumitted Successfuly!.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';

	   }
    else{
		echo "The record was not insert seccessfuly because of this error--->".mysqli_error($conn);
	     }
         }
mysqli_close($conn);
  
?>