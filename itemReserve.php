<!--  itemReserve.php
      Page that handles the reserve process of an item.
    

      Revision History

            Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.07.14: Created
    
 -->
<?php
include("studentHome.php");

echo $id = $_GET['id'];
if (ISSET($_SESSION['signedUser']))
 {
  $userId = $_SESSION['signedUser'];
echo $userId;
}

if (ISSET($_SESSION['userType']))
 {
  $userTypeId = $_SESSION['userType'];
 echo $userTypeId;
 if($userTypeId==3)
{
	include("facultyHome.php");
}
}
?>
<!DOCTYPE html

	PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"

	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Library App - User Information</title>
		<meta http-equiv="content-type" content="text/html"; charset=utf-8" />
	<link href="styles/css/bootstrap.css" rel="stylesheet">
<link href="styles/css/bootstrap.min.css" rel="stylesheet">
<link href="styles/css/style.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
<style>
#searchText
{
display:none;
}
#search
{
	display:none;
}
 </style>
 </head>
<body>
	<div class="container">
	<div class="row">
<div class='col-xs-12 col-sm-6 col-md-4'>	
<?php
try
{
mysql_connect("127.8.48.130:3306","adminyfbkrFb","Ceb9vA6uka3N");	
	mysql_select_db("libapp");
$result = mysql_query("SELECT copies,id,title,isbn FROM item where id=$id");
$row=mysql_fetch_array($result);	

if($row['copies']!=0)
{
$updateQuery=mysql_query("update item set copies=copies-1 where id=$id");
}
$reserveQuery=mysql_query("insert into user_reserved values('$userId',$id,'".date('Y-m-d')."')");
echo '<script language="javascript">';
  echo 'alert("Book with id " +  '.$row['id'].'+ " is Reserved")';
echo '</script>';

}
catch(mysqlException $e)
{
	

	{
	die("Data could not be updated" . mysql_error());

	}
}
?>
</div>
</div>
</div>



