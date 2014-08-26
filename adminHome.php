<!--  adminHome.php
      Administrator Home Page that is included in all pages of administrator.
    

      Revision History

            Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.07.05: Created
    
 -->
<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="styles/css/bootstrap.css" rel="stylesheet">
<link href="styles/css/bootstrap.min.css" rel="stylesheet">
<link href="styles/css/style.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style>
#reserve
{
  display: none;
}
</style>
</head>
<body>
    <div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">  
    <nav role="navigation" class="navbar navbar-inverse navbar-fixed-top">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                    </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="adminHome.php">Home</a></li>
                <li><a href="viewUser.php">View User</a></li>
                <li><a href="addItem.php">Add Item</a></li>
                <li><a href="viewItem.php">View Item</a></li>
                <li><a href="issueItem.php">Issue Item</a></li>
                <li><a href="signOut.php">Sign Out</a></li>
                </ul>
</div>
</div>
</div>
</div>
<div id="welcome">
<?php
$userId =null;
if (ISSET($_SESSION['signedUser']))
 {
  $userId = $_SESSION['signedUser'];
  $userName=$_SESSION['signedUserName'];
echo "<h3>Welcome ".$userName."</h3>";

}
?>

</div>
</body>
</html>