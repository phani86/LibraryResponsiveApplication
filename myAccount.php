<?php
include("studentHome.php");
//session_start();
echo "<br />";
echo "<br />";
$userId =null;
$userTypeId=null;
if (ISSET($_SESSION['signedUser']))
 {
  $userId = $_SESSION['signedUser'];

}	
if (ISSET($_SESSION['userType']))
 {
  $userTypeId = $_SESSION['userType'];

}	

	mysql_connect("127.8.48.130:3306","adminyfbkrFb","Ceb9vA6uka3N");	
	mysql_select_db("libapp");

	$result=mysql_query("SELECT * FROM user where id='$userId'");

?>



<!--	myAccount.php



		Revision History

			Srinivasa Phanindra Valluri, Puneet Kalva, 2014.06.15: Created

-->




<!DOCTYPE html

	PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"

	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">



<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>

		<title>Library App - User Information</title>

		<meta http-equiv="content-type" content="text/html"; charset=utf-8" />

<style>
	h4{
	margin-top:50px;
	padding:5px;
}
.row
{
padding:5px;
}
</style>
	
	</head>

	<body>

	<h4><div class="col-xs-12">My Account Information</div></h4><br />

<?php

	while($row=mysql_fetch_array($result))

	{

	echo "<div class='container'>";
	echo "<div class='row'>";
 		echo "<div class='col-xs-12 col-sm-4 col-md-4'>";
echo "<div class='form-group'>";

	  
	   
	
echo "<label for='userId' class='col-xs-4 control-label'>User ID</label>";
 

echo "<div class='col-xs-8'>";

		
	echo "<p>".$row['id']."</p>";
 	echo "</div>";
    echo  "</div>";
 	

echo "<div class='form-group'>";

	  
	   
	
echo "<label for='forename' class='col-xs-4 control-label'>Forename</label>";
 

echo "<div class='col-xs-8'>";

		
	echo "<p>".$row['forename']."</p>";
 	echo "</div>";
    echo  "</div>";
 	
echo "<div class='form-group'>";

	  
	   
	
echo "<label for='surname' class='col-xs-4 control-label'>Surname</label>";
 

echo "<div class='col-xs-8'>";

		
	echo "<p>".$row['surname']."</p>";
 	 	echo "</div>";
    echo  "</div>";
 
 	echo "<div class='form-group'>";

	
	  
	   
	
echo "<label for='email' class='col-xs-4 control-label'>Email</label>";
 

echo "<div class='col-xs-8'>";

		
	echo "<p>".$row['email']."</p>";
 	 	echo "</div>";
    echo  "</div>";
 	
echo "<div class='form-group'>";

	
	  
	   
	
echo "<label for='password' class='col-xs-4 control-label'>Password</label>";
 

echo "<div class='col-xs-8'>";

		
	echo "<p>".$row['password']."</p>";
 	echo "</div>";
    echo  "</div>";
 	
	
echo "</div>";
echo "</div>";
echo "</div>";

}
?>

<?php

	mysql_close();

?>

