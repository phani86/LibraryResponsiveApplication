<!--   home.php
       Home page to search for availability of items ,signUp for new users and signIn for existing userrs. 


    Revision History

      Srinivasa Phanindra Valluri, Puneet Kalva,Nirmal Ignacy, 2014.06.10: Created

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
libs/jquery/1.3.0/jquery.min.js"></script>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">

<script>
  $(function() {
    $( document ).tooltip();
  });
  </script>
<script type="text/javascript">
        function validateForm() {
            var x = document.getElementById('searchText').value;
            if (x == ';' || x == "select" || x == "insert"||x=='='||x=="drop"||x=='--'||x=='1=1') {
            alert("Not a valid input!");
            return false;
        }
        else
            document.form.submit();
        }
    </script>

</head>	
<body>

<form id="searchForm" class="form-horizontal" role="form" onsubmit='return validateForm();' action="itemAvailability.php"method="post">
	<div class="container">
  <div class="containerSearch">

  <div class="helper">
    
    <div class="content">
      <div class="input-group">
        <input class="form-control" type="text" name="searchText" id="searchText"  placeholder="search" title="Enter ISBN,Title or Author" size="50" />
          <span class="input-group-btn">
            <button class="btn btn-primary" id="search">
            <span class="glyphicon glyphicon-search" id="glys"></span></button>
          </span>
        
      </div>
     
    </div>
        </div>
      </div>
    </div>

  </div>

  
    </div><!-- /input-group -->
  
</div>
</form>
</div>
</div>
</body>
</html>