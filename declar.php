<!DOCTYPE html>
<html>
<head>
	<title>
		Application From
	</title>
	<style>
		.container{
      border: 2px solid black;
    padding-right: 30;
			 width: 600;
       padding: 30px;     /*padding-right: 90px;*/
			 margin: auto;
       text-align: left;
       text-align: center;
  
		}
		
		
	
		#div1{
      margin: auto;
			width: 58.33%;
			float: left;

		}
		#div2{
			
     float: right;
	</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edges">
	<meta name="viewport" content="width=30%, initial-scale-1">
	<link rel="stylesheet" href="https://indovisionservices.in/info/dev/v15/inc/bs/bootstrap.min.css">
<script src="https://indovisionservices.in/info/dev/v15/inc/bs/bootstrap.min.js"></script>
<script type="text/javascript" src="https://indovisionservices.in/info/dev/v15/inc/bs/bootstrap-select.min.js"></script>
</head>
<body>

  <div class="container">
  <!-- Content here -->
  <form action="declardb.php" method="POST">
	<h1 style="text-align:center;">
	DECLARTION FORM</h1>
  
      <div class="input-group-text">
      <label for ="textarea" class="form-label"><h3> Employer Code No. </h3>
    </label>
        <input type="textarea" id="textarea1" class="form-texts" name="emp_code1">
  </div>
  <br>
 
 <div id="div1">
   <h>(A) Insured Person's Particulars</h>
   <table class="table table-bordered">
   	<tr>
   <th scope="row">1.Insurance No.</th><td>
   <span class="input-group-text"></span>
   <input type="text" aria-label="I" class="form-control" name="insur_no">
   </td>
   </tr>
  
   <tbody>
   <tr>
   <th scope="row">2.Name(in block capital)</th>
   <td>
   <div class="input-group-text">
   <input type="text" aria-label="I" class="form-control" name="name">
   </td>
   
   </tr></span>
   <tr>
   <th scope="row">3.Father's/Husband's</th>
   <td><span class="input-group-text"></span>
   <input type="text" aria-label="I" class="form-control" name="fathername">
   </td>
   </tr>
   <tr>
   <th >4.Date of Birth
   </th>
   <td>
   <span class="input-group-text">
    <label class="date" for="date"></label>
    <input type="Date" class="DD" id="DD" name="date">  
    </span>
     </td></tr>
     <tr><th>5.Martial Status</th><td>
   <div>
      

       <input name ="martial" type="radio" id="married" value="option1">
       <label name="martial" for="inlineCheckbox1">Married</label>
   
       <input name ="martial" type="radio" id="unmarried" value="option2" checked>
       <label name="martial" for="inlineCheckbox2">Unmarried</label>
  
       <input name="martial" type="radio" id="widow" value="option3" >
       <label name="martial" for="inlineCheckbox3">Widow</label>
   </div></td></tr>
    <tr><th>6.Sex</th><td>
   <div class="form-check form-check-inline">
       <input name ="gender" type="radio" id="male" value="male" checked>
       <label name="gender" for="inlineCheckbox1">Male</label>
   
       <input name="gender" type="radio" id="female" value="female">
    <label name="gender" for="inlineCheckbox2">Female</label>
    </div>
    </td>
    </tr>
    <tr><td>
    <h5>7. Present Address</h5>
    <textarea name="pre_add" id="explain" cols="30" rows="3" ></textarea>
    <div class="mb-3">
    <label for="numbers" class="form-label">Pin Code</label>
    <input type="numbers" class="form-control" id="numbers" aria-describedby="emailHelp" name="pin_code">
    </div>
   
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
    </td>
    <td>
    	<h5> 8.Permanent Address</h5>
    <textarea name="per_add" id="explain" cols="30" rows="3" ></textarea>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Pin Code &nbsp; &nbsp; &nbsp; </label>
    <input type="code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pin_code1">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email1">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  </td>
       
    </tr>
        <tr>
    	<td>Branch office:
    		<label for ="textarea" class="form-label"></label>
    		<input type="textarea" id="textarea" class="branch" name="branch"></td>
    	<td>Dispensary:
    		<label for ="textarea" class="form-label"></label>
    		<input type="textarea" id="textarea1" class="dispens" name="dispens"></td>
        </tr>
    </tbody>
    </table>
     </div>
     
    	<div id="div2">
    	<table class="table table-bordered">
         <h5>(b)Employer's Particulars</h5>
         <tbody>
         	<tr>
       <td>9.Date of Appointment
         <span class="input-group-text">
         <label class="date" for="inlineCheckbox1"></label>
         <input type="Date" class="DD" id="DD" name="date_appoint">
         </span></td></tr>
       
       <tr><td>
       <h>10.Name & Address of the employer</h><br>
          <textarea name="emp_add" id="explain" cols="50" rows="8" ></textarea></td>
        </tr>
        <tr><td>
    	<h5>11.In case of any previous employment please fillup the details as under:-
        </h5>
     <div class="mb-3">
    <label for="Emplrs" class="form-label"> Previous Ins. No.</label>
    <input type="numbers" class="prev_insur" id="Emplrs" aria-describedby="Emplrs" name="prev_insur">
    </div>
     <br>
    <div class="mb-3">
    <label for="Emplrs" class="form-label">Emplrs. Code No.</label>
    <input type="numbers" class="Emplrs_code1" id="Emplrs1" aria-describedby="Emplrs1" name="Emplrs_code1">
    </div></td></tr>
     <tr><td>
    <h5>12.Name & Address of the employer</h5>
    <textarea type="textarea" class="name_add_emp" cols="50" rows="7" name="name_add_emp"></textarea>
    </td>
    </tr>
    </tbody>
    </table></div>
  <br>
  <br>
    <div id="div3">
    <table class="table table-bordered">
    <h5>(c) Details of the nominee u/s 71 of ESI Act1948 / Rule 56(2) of ESI (Central) Rules 1950 for payment of 
    	       cash benefit in the event of death</h5>
    <thead>
    <tr>
      <th scope="col">Name of the Nominee</th>
      <th scope="col">Relationship with insured person</th>
      <th scope="col">Adderss</th>
    </tr>
    </thead>
    <tbody>
    <tr>  
      <td ><input type="text"name="nominee"></td>
      <td><input type="text" name="relation"></td>
      <td><input type="text" name="address"></td>
    </tr>
    </tbody>
    </table>
    </div>
    <br>
    <br>
    <h5>I hereby declare that the above particulars have been given by me and are correct to the best of my knowledge and I belief. I also under take to intimate to the corporation any change in the membership of my family within 15 days of such change having occured.</h5>
    <br><table class=" table table-bordered"><thead>
    <tr>
      <th scope="col">Upload Counter Signature of the Employer</th>
      <th scope="col">Upload Signature with seal</th>
      <th scope="col">Upload Signature/I.T of IP</th>
    </tr>
    </thead><tbody><tr>
    <div id="div5">
       <td> <label for ="file" class="form-label"></label>
      <input type="file" id="file" class="form-texts" name="sign_emp">
    </td>
      
        <td><label for ="file" class="form-label" ></label>
        <input type="file" id="file2" class="form-texts" name="sign_seal">
        </td><td>
        
        <label for ="file" class="form-label" ></label>
        <input type="file" id="file3" class="form-texts" name="sign_it_ip">
    </div></td></tr>
  </tbody>
  </table>
    <br><br>
	<h4>(D) FAMILY PARTICULARS OF INSURED PERSON</h4>	<div id="div6" class="collapse show">
	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Name</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Relationship with insured person</th>
      <th scope="col">Whether residing with him/her or not(YES/NO)</th>
      <th scope="col">If No. State places of Residence(STATE/TOWN)</th>
    </tr>
  </thead>
  <tbody>

    <tr>
    <!--- column loop -->
    <?php for($j=1; $j<8; $j++ ){

      ?>

</tr>
<tr>
    <!--- row loop --->
    <?php for ($i=1; $i <5 ; $i++) { ?>
    
   <?php  if($i==1){ ?> 
   <?php echo  "<td> ".$i*$j."</td>"; ?>
  <?php }?>
  <td><input type="text" name="family[]"  ></td>
    <?php  if($i==1){ ?> 
      <td><input type="Date" name="date1[]"></td>
      
      <?php } ?>
        
      <?php } ?> 
    <?php }?>
     </tr>
     

      </tbody>
      </table></div>
      <br>
        <div id="div7">
      	<table class="table table-bordered">
      	<h4>ESI CORPORATION(Temporary Identity Card)</h4>
     <thead>
    <tr>
      <th scope="col">Name</th>
      <td colspan="3"><textarea name="tem_name" id="explain" cols="100" rows="1" ></textarea> </td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Ins.No.</th>
      <td><input type="text" name="ins_no"></td>
      <td>Date of Entry</td>
      <td><input type="date" name="date_entry"></td>
      
    </tr>
    <tr>
      <th scope="row">Father's/husband Name</th>
      <td><input type="text" name="fath_hus"></td>
      <td>Date of Birth</td>
      <td><input type="date" name="date_birth1"></td>
      
    </tr>
    <tr>
      <th scope="row">Branch Office</th>
      <td><input type="text" name="branch2"></td>
      <td>Despensary</td>
      <td><input type="text" name="Despensnary"></td>
    </tr>
    <tr>
    	<th scope="row">Name, Address & <br>Code No. of the employer</th>
       <td colspan="3">
        <textarea name="name_add" id="explain" cols="100" rows="2" ></textarea> </td>
    </tr>
  </tbody></table> <br>
    <table class="table table-bordered"><thead>
    <tr>
      <th scope="col">Valid Date</th>
      <th scope="col">Upload Signature of T.I. of I P</th>
      <th scope="col">Upload Signature of B.M with seal</th>
    </tr>
    </thead><tbody><tr><td>

     <label class="date" for="date"></label>
    <input type="Date" class="DD" id="DD" name="valid_date">
</td><td>
    
        <label for ="textarea" class="form-label"></label>
   		<input type="file" id="file1" class="form-texts" name="sign_ti">
    </td><td>
   		
        <label for ="textarea" class="form-label" ></label>
        <input type="file" id="file2" class="form-texts" name="sign_bm">
     </td></tr></tbody>
   </table></div>

<br>
     <div id="div8">
  <table class="table table-bordered">
  
     <h5><b> FOR BRANCH OFFCIE USE ONLY</b></h5> 
    </tr>
  
  <tbody>
    <tr>
      <th scope="row">1. Date of allotment of Ins. No.</th>
      <td><label for ="date" class="form-label"></label>
   		<input type="date" id="date" class="form-texts" name="date_allot"></td>
   
    </tr>
    <tr>
      <th scope="row">2. Date of issue of T.I.C :</th>
      <td><label for ="date" class="form-label"></label>
   		<input type="date" id="date" class="form-texts" name="date_tic"></td>
    </tr>
    <tr>
      <th scope="row">3. Name/ No. of Disp. :</th>
      <td><label for ="textarea" class="form-label"></label>
   		<input type="textarea" id="textarea1" class="form-texts" name="dis_name"></td>
    </tr>
    <br>
    <tr>
      <th scope="row">4. Upload Signature of Branch manager :</th>
      <td><label for ="file" class="form-label"></label>
      <input type="file" id="sign" class="form-texts" name="manager_sign"></td>
    </tr>

  </tbody>
</table></div>
<div >
     <input type="submit" name="submit">
   </div>
	</form></div>
    </body>
    </html>