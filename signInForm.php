<!--  signInForm.php 
      page that handles the process of user signin to the application.
  
  Revision History

            Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.05.26: Created
      
 -->

<?php
include("navbar.php");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="styles/css/bootstrap.css" rel="stylesheet">
<link href="styles/css/bootstrap.min.css" rel="stylesheet">
<link href="styles/css/style.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.9.1/jquery.min.js"></script>
 <!-- // <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
<style>
.ui-tooltip {
    width: 310px;
  }
  #signin {
  display: none;

  }
  h3
  {
    
    padding:20px;
  }
  </style>
  <script>
  $(function() {
    var tooltips = $( "[title]" ).tooltip({
      position: {
        my: "top",
        at: "top-40"
      }
    });
  });
</script> 
</head>	
<body>
	<h3>Sign In</h3>
<form id="mainForm" class="form-horizontal" role="form" action="signInValidation.php" method="post">
     <div class="container">
     <div class="col-xs-12 col-sm-6 col-md-4">
     <div class="row" >
<div class="col-xs-12">

  <label for="userId">User ID</label></div>
    <div class="col-xs-12"><input type="text" class="form-control" placeholder="User Id" id="userId" name="userId" required=""title="Please enter your userID"><br />
    </div>
  </div>
<div class="row" >
<div class="col-xs-12">

  <label for="password">Password</label></div>
  <div class="col-xs-12"><input type="password" class="form-control" placeholder="Password" id="password" name="password" required="" title="Please enter your password"><br />
  </div>
  </div>
        
<div class="row">
   <div class="col-xs-12">
      <button type="submit" id="signinButton" class="btn btn-primary">Sign In</button>

</div>
</div>
</div>
</div>

</form>

</body>

</html>
