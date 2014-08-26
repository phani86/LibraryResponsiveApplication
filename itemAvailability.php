<!--  itemAvailability.php
      Page that displays list of avilable items based on search parameter.
    

      Revision History

            Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.07.15: Created
    
 -->
<?php
include("navbarhome.php");
session_start();
$userId =null;
if (ISSET($_SESSION['signedUser']))
 {
  $userId = $_SESSION['signedUser'];
}
if (ISSET($_SESSION['userType']))
 {
  $userTypeId = $_SESSION['userType'];
if($userTypeId==2)
{
	include("studentHome.php");
}
else if($userTypeId==3)
{
	include("facultyHome.php");
}
}
echo "<br />";
echo "<br />";
echo "<br />";
if($_POST)
{
$searchText=trim($_POST['searchText']);
}
try
{
mysql_connect("127.8.48.130:3306","adminyfbkrFb","Ceb9vA6uka3N");	
	mysql_select_db("libapp");
$result = mysql_query("SELECT * FROM item where(title like '%$searchText%' or author like'%$searchText%' or ISBN like'%$searchText%' or ISSN like '%$searchText%') and (availabilityStatus='Available')");
}
catch(mysqlException $e)
{
	
	{
	die("Data could not be read" . mysql_error());

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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
<link href="styles/css/style.css" rel="stylesheet">

 	<style type="text/css">

#searchText
{
display:none;
}
#search
{
	display:none;
}

#itemImage
{
	margin-top:20px;
	margin-left:10px;
	padding:10px;
	
}
#itemTitle
{
	
	margin-left:10px;
	padding:10px;
} 	
p
{
		margin-left:10px;

	padding:10px;
}
 	</style>


 	</head>

	<body>
		<div class="container">
	<div class="row">
<div class='col-xs-12 col-sm-6 col-md-4'>	

<?php
if (mysql_num_rows($result) > 0)
{
while($row=mysql_fetch_array($result)) 
{
	
	
	$path1="images";
$path2= "/"   ; 
$path3=$row['image'];
	echo "<div class='col-xs-12'><a href=\"title.php?title=".$row['title']."\"><img src=$path1$path2$path3 width='150' height='150' id='itemImage'/></a></div>";	
   // echo "$path1$path2$path3";
    echo "<div class='col-xs-12'><a id='itemTitle' class='itemTitle' href=\"title.php?title=".$row['title']."\">".$row['title']."</a>
    by<p>".$row['author']."</p></div>";

echo "</div>";
echo "</div>";	
echo "<hr />";
//echo "<br />";

}
}
else
{
	
	echo "<script>alert('Book not available')</script>";

}
//echo "<hr />";


?>
