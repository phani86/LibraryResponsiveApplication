<!--viewItem.php
	Page that displays all items information to administrator    
Revision History

            Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.07.29: Created
  


 -->
<?php
include("adminHome.php");
	try
	{
	mysql_connect("localhost", "root", "");

	mysql_select_db("LibraryData");

	$result=mysql_query("SELECT * FROM item");
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

		<title>Library App - Item Information</title>

		<meta http-equiv="content-type" content="text/html"; charset=utf-8" />

<link href="styles/css/bootstrap.css" rel="stylesheet">
<link href="styles/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
<link href="styles/css/style.css" rel="stylesheet">
 <style>
 	h2
 	{
 	margin-top:50px;
 }
 </style>
 </head>

<body>
	<div class="container">
	<div class="row">
	<div class='col-xs-12 col-sm-6 col-md-4'>	
	<div class="table-responsive">

  	<h2>Item Information</h2>
	<table class="table table-condensed" id=usersTable> 
	<table class="table table-bordered" id=usersTable
	summary="Table contains customer order information">

	<tr>

	<th>Id</th>

	<th>Type</th>

	<th>ISBN</th>
	<th>ISSN</th>
	<th>Category</th>

	<th>Title</th>
    <th>Author</th>
    <th>Publisher</th>
    <th>Published Date</th>
    <th>Copies</th>
     <th>Availability Status</th>
    <th>Image</th>
    </tr>

<?php
	
	
	while($row=mysql_fetch_array($result))

	{

		echo "<tr>";

	echo "<td div class='col-xs-1'>" .$row['id']. "</div></td>";

	echo "<td div class='col-xs-1'>"; 
?>
<?php	
	$q="select typeName from item,item_type where (item_type.id=item.typeId) and item.id=".$row['id']."";
	$r=mysql_query($q) or die($q);
	$rw=mysql_fetch_array($r);	
	echo $rw['typeName']."<br />";
	echo "</div></td>";
?>

<?php
	echo "<td div class='col-xs-1'>" .$row['ISBN']  ."</div></td>";

	echo "<td div class='col-xs-1'>" .$row['ISSN']  ."</div></td>";
	echo "<td div class='col-xs-1'>";
	?>
	<?php
	$s="select categoryName from item_category,item where (item_category.id=item.categoryId) and item.id=".$row['id']."";
	$r=mysql_query($s) or die($s);
	$rw=mysql_fetch_array($r);	
	echo $rw['categoryName']."<br />";
	echo "</div></td>";
 
echo "<td div class='col-xs-1'>" .$row['title']  ."</div></td>";
echo "<td div class='col-xs-1'>" .$row['author']  ."</div></td>";
echo "<td div class='col-xs-1'>" .$row['publisher']  ."</div></td>";
echo "<td div class='col-xs-1'>" .$row['pubDate']  ."</div></td>";
echo "<td div class='col-xs-1'>" .$row['copies']  ."</div></td>";
echo "<td div class='col-xs-1'>" .$row['availabilityStatus']  ."</div></td>";

$path1="images";
$path2= "/" ; 
$path3=$row['image'];
echo "<td div='col-xs-1'><img src=$path1.$path2$path3 width='75' height='75' /><br /><br /></td>";	
echo "</tr>";

}

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
?>
	