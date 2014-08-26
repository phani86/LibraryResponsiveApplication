<?php

include("adminHome.php");
echo "<br />";
	try
	{
	mysql_connect("127.8.48.130:3306","adminyfbkrFb","Ceb9vA6uka3N");	
	mysql_select_db("libapp");
	$result=mysql_query("SELECT * FROM user where userTypeId !=1");
}
catch(mysqlException $e)
{

	{
	die("Data could not be read" . mysql_error());

	}
}
?>

<!--	viewUser.php
			


		Revision History

			Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy, 2014.06.20: Created

-->
<!DOCTYPE html

	PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"

	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">



<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>

		<title>Library App - USer Information</title>

		<meta http-equiv="content-type" content="text/html"; charset=utf-8" />

	<link href="styles/css/bootstrap.css" rel="stylesheet">
<link href="styles/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
<link href="styles/css/style.css" rel="stylesheet">

<style>

h2
{
	margin-top:40px;
}
</style>

 	</head>

	<body>
<div class="container">
	<div class="row">
<div class='col-xs-12 col-sm-12 col-md-12'>	
	<div class="table-responsive">

  <h2>User Information</h2>
	<table class="table table-condensed" id=usersTable> 
	<table class="table table-bordered" id=usersTable
	summary="Table contains customer order information">

	<tr>

	<th>Id</th>

	<th>Forename</th>

	<th>Surname</th>

	<th>Email</th>

	<th>Type</th>
    <th>Operations</th>
    </tr>

<?php
	
	
	while($row=mysql_fetch_array($result))

	{

	echo "<form action=save.php method='get'>";
	echo "<tr>";

	echo "<td div class='col-md-1'>" .$row['id']. "</div></td>";

	echo "<td div class='col-md-1'>" .$row['forename']  ."</div></td>";

	echo "<td div class='col-md-1'>" .$row['surname']  ."</div></td>";

	echo "<td div class='col-md-1'>" .$row['email']  ."</div></td>";

	
	echo "<td div class='col-md-1'>";
     ?>
     <?php
	$s="select type from usertype,user where (user.userTypeId=usertype.typeId) and user.id='".$row['id']."'";
	$r=mysql_query($s) or die($s);
	$rw=mysql_fetch_array($r);	
	echo $rw['type']."<br />";
	echo "</div></td>";	
	
    echo "<td class='col-md-1'><a class= \"btn btn-success \" id='update' class='update' href=\"saveUser.php?id=".$row['id']."\">Update</a>&nbsp";   
	echo "<a class=\" btn btn-danger  \" id=\" 'delete' \"href=\"deleteUser.php?id=".$row['id']." \"
	onclick=\"return confirm('Are you sure to delete  ".$row['forename']."?');\"> Delete </a>
</div></td>";
echo "</tr>";
   
}
       
echo "</div>";
echo "</div>";	
echo "</div>";
echo "</div>";	
echo "</form>";   
mysql_free_result($result);
mysql_close();

?>

