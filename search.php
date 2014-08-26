<?php
//include("studentMenu.php");

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
</head>	
<body>

<form id="searchForm" class="form-horizontal" role="form" action="itemAvailability.php" method="post">
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4">
        <div class="col-xs-8">

    <div class="input-group">
      <input class="form-control" type="text" name="searchText" placeholder="search" title="Enter ISBN,Title or Author"/>
  <span class="glyphicon glyphicon-search"></span>

      <span class="input-group-btn">
        <button class="btn btn-success">Search</button>
      </span>
    </div>
    </div><!-- /input-group -->
</div>
</div>
</form>
<script type="text/javascript">	
</script>
</body>
</html>