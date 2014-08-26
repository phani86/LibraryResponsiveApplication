<!--  signUpForm.php 
      page that handles the process of new user registration to application.
  
  Revision History

            Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.05.20: Created
      
 -->

<?php
include("navbarhome.php");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="styles/css/bootstrap.css" rel="stylesheet">
<link href="styles/css/bootstrap.min.css" rel="stylesheet">
<link href="styles/css/style.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
<style>
.ui-tooltip {
    width: 410px;
  }
  h3
  {
  padding:20px;
}
h4
  {
  padding:20px;
}
  </style>

  <script>
  $(function() {
    var tooltips = $( "[title]" ).tooltip({
      position: {
                my: "top",
        at: "top-45"

      }
    });
  });
</script>  
</head>	
<body>
	<h3>Sign Up</h3>
  <h4> Already Have an Account&nbsp;<a class="btn btn-primary" href="signInForm.php">Sign In</a></h4>
<form id="signUpForm"class="form-horizontal" role="form" action="signUpConfirmation.php" method="post">
	<div class="container">
     <div class="col-xs-12 col-sm-6 col-md-4">
     <div class="row" >
<div class="col-xs-12">
		
	<label for="userId">User ID</label></div>
	<div class="col-xs-12">
	<input type="text" class="form-control"  placeholder="User ID" id="userId" name="userId" title="Please enter your user ID." pattern='[A-Za-z\-A-Za-z0-9\\s]*'><br />
		</div>
        </div>
      
  <div class="row" >
      
      <div class="col-xs-12">
	<label for="forename">Forename</label></div>		   
	    <div class="col-xs-12">
	<input type="text" class="form-control"  placeholder="Forename" id="forename" name="forename" title="Please enter your forename" pattern='[A-Za-z\\s]*'/>
<br />
		</div>
        </div>
  <div class="row" >
      
      <div class="col-xs-12">
        
	<label for="surname">Surname</label></div>		   
	    <div class="col-xs-12">
	<input type="text" class="form-control"  placeholder="Surname" id="surname" name="surname" title="Please enter your surname." pattern='[A-Za-z\\s]*' /><br />
		</div>
    </div>
<div class="row" >
      
<div class="col-xs-12">
  
<label for="emailId">Email</label></div>	
	    <div class="col-xs-12">
<input type="email" class="form-control"  placeholder="Email" id="emailId" name="emailId" title="Please enter  emaild in the format a@a.com"><br />
</div>
</div>
<div class="row" >
<div class="col-xs-12">
    
  <label for="password">Password</label></div>
   <div class="col-xs-12">
   <input type="password" class="form-control"  placeholder="Password" id="password" name="password" title="Please enter password atleast 6 characters." pattern=".{6,12}"/><br />
    </div>
  </div>
<div class="row" >
<div class="col-xs-12">
    
  <label for="confirmPassword">Confirm Password</label></div>
   <div class="col-xs-12">
   <input type="password" class="form-control"  placeholder="Confirm Password" id="confirmPassword" name="confirmPassword" title="Please confirm your password."><br />
    </div>
  </div>


  <div class="row">
    <div class="col-xs-12">
      <button type="submit" id="signupButton" class="btn btn-primary ">Sign Up</button>
    </div>
  </div>
</div>
</div>
</form>
</body>
</html>
