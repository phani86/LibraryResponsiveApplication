<!--  title.php 
      page that retrieves the specific item details based on particular selection
      from list of items.
  
  	  Revision History

            Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.07.20: Created
      
 -->

<?php
include("navbarhome.php");
//session_start();
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
if (ISSET($_SESSION['signedUser']))
 {
  $userId = $_SESSION['signedUser'];
echo $userId;
}

if (ISSET($_SESSION['userType']))
 {
  $userTypeId = $_SESSION['userType'];
 echo $userTypeId;
if($userTypeId==1)
{
	include("adminHome.php");
}
if($userTypeId==2)
{
	include("studentHome.php");
}
if($userTypeId==3)
{
	include("facultyHome.php");
}
}
echo "<br />";
echo "<br />";
$title = $_GET['title'];
$new = str_replace('%20',' ', $title);


 mysql_connect("127.8.48.130:3306","adminyfbkrFb","Ceb9vA6uka3N");	
	mysql_select_db("libapp");
$result = mysql_query("SELECT * FROM item where title=('$new')");	

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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>

<style>
#searchText
{
display:none;
}
#search
{
	display:none;
}
 #image
 {
 margin-top:30px;
 padding:20px;
 margin-left:20px;
}
h3
{	
	padding:20px;
	 margin-left:20px;

}	
h4
{
	padding:20px;
	color:green;
	 margin-left:20px;

} 	
li
{
	margin-left:20px;
}
#reserve
{
	 margin-left:40px;
	 position:relative;

}
 	
 	</style>

 	</head>
	<body>
	<div class="container">
	<div class="row">
<div class='col-xs-12 col-sm-6 col-md-4'>					
<?php 
while($row = mysql_fetch_array($result))
{
echo "<form action=itemReserve.php method='get'>";

$path1="images";
$path2= "/" ; 
$path3=$row['image'];
	echo "<img src=$path1$path2$path3 width='200' height='200' id='image'/>";	

?>
<h3>About this item</h3>
<?php
echo "<ul>";
echo "<li><p>Item ID: " .$row['id']."</p></li>";
?>
	<?php
	$s="select typeName from item_type,item where item.typeId=item_type.id";
	$r=mysql_query($s) or die($s);
	$rw=mysql_fetch_array($r);	
	echo "<p><li>Item Type: ".$rw['typeName']."</p></li>";
	if ($rw['typeName']=='Book')echo "<p><li>ISBN: " .$row['ISBN']."</p></li>";
	else if ($rw['typeName']=='Book')echo "<p><li>ISSN: " .$row['ISSN']."</p></li>";
	?>
	<?php
	$sq="select categoryName from item_category,item where item.categoryId=item_category.id";
	$res=mysql_query($sq) or die($sq);
	$cat=mysql_fetch_array($res);

	echo "<li><p>Item Category: ".$cat['categoryName']."</p></li>";
	?>
<?php

	echo "<p><li>Author: ".$row['author']."</p></li>";
	echo "<p><li>Publisher: " .$row['publisher']."</p></li>";
	echo "<p><li>PublishedDate: ".$row['pubDate']."</p></li>";
	echo "<p><li>Number Of Copies: " .$row['copies']."</p></li>";
	if($row['copies']==0)
	{
		$updateQuery=mysql_query("update item set availabilityStatus='Not Available' where id=".$row['id']."");
	echo "<p><li>Availability Status: " .$row['availabilityStatus']."</p></li>";
		
	}
	else

	echo "<p><li>Availability Status: ".$row['availabilityStatus']."</p></li>";
        
echo "</ul>";
  
if(!isset($_SESSION["signedUser"]))echo "<h4>You need to sign in to reserve an item</h4>";
else if(isset($_SESSION["signedUser"]))echo "<a class=\"btn btn-success \" id='reserve' class='reserve' href=\"itemReserve.php?id=".$row['id']."\">Reserve</a></td>";

echo "</form>";

}
echo "</div>";
echo "</div>";
echo "</div>";

?>
