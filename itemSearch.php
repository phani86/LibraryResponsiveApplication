<!--  itemSearch.php
      Search page to seaarch for item availbilty based on ISBN,ISSN,Title or author of Item(Book,Journal).
    

      Revision History

            Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.07.15: Created
    
 --> 
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
            if (x == ';' || x=="'"||x == "select" || x == "insert"||x=='='||x=="drop"||x=='--'||x=="select"||x=='1=1') {
            alert("Not a valid input!");
            return false;
        }
        else
            document.form.submit();
        }
    </script>

</head>	
<body>
<form id="itemSearchForm" class="form-horizontal" role="form" onsubmit='return validateForm();' action="itemAvailability.php" method="post">
<div class="containerSearch">
  <div class="helper">
    <div class="content">
      <div class="input-group">
        <input class="form-control" type="text" name="searchText" id="searchText"  placeholder="search" required="" title="Enter ISBN,Title or Author" size="50" />
          <span class="input-group-btn">
            <button class="btn btn-primary" id="search">
            <span class="glyphicon glyphicon-search" id="glys"></span></button>
          </span>
        
      </div>
    </div><!-- /input-group -->
  </div>
</div>
</form>
</body>
</html>
 	
	
