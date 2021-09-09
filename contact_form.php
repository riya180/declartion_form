<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form</title>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="bg-light">

<div class="container">
<div class="py-5 text-center">
        <img class=" " src="" alt="" width="" height="">
        <h2>Contact us form</h2>
        <p class="lead">find your eployee and fill properly</p>
      </div>
<fieldset>
  
  <form name="frmContact" class="needs-validation " method="post" action="contact.php">
    <p>
      <label for="Name">Your id </label>
      <input type="text" class="form-control" name="txtid" id="txtName" placeholder="Name" value="" required>
	  <div class="invalid-feedback">
                  Valid first name is required.
                </div>
    </p>
    <p>
      <label for="email">Your name</label>
      <input type="text"  class="form-control"  name="txtname" id="txtEmail" placeholder="Email" value="" required>
    </p>
    <p>
      <label for="phone">Your Phone</label>
      <input type="text"  class="form-control" name="txtPhone" id="txtPhone" placeholder="Phone" value="" required>
    </p>
    <p>
      <label for="message">date</label>
      <input type="date" class="form-control" name="txtdate" id="txtdate" placeholder="date" value="required">
    </p>
    <p>&nbsp;</p>
    <p>
      <input type="submit" name="Submit" id="Submit" value="submit"  class="btn btn-success btn-lg btn-block">
    </p>
  </form>
</fieldset>
</div>
<!-- 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>-->
</body>
</html>