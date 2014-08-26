<!-- saveUser.php 
	 Page that handles the process of changing user privileges and password information. 

Revision History

            Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.06.18: Created
    
 -->
<?php
include("adminHome.php");
if(isset($_POST['update']))
  	{
  	echo $uTypeId=$_POST['uTypeId'];
  	echo $uid = $_POST['uid'];

	 }
 	echo $id = $_GET['id'];

try
{
 mysql_connect("127.8.48.130:3306","adminyfbkrFb","Ceb9vA6uka3N");	
	mysql_select_db("libapp");
$result = mysql_query("SELECT * FROM user where id='$id'");
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
<link href="styles/css/style.css" rel="stylesheet">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>


 	</head>

	<body>

 	<?php 
 	$row = mysql_fetch_array($result);
	echo "<h3><div class='col-xs-12'>"."User Update Page"."</h3></div>";

 	
	echo "<form action=updateUser.php method='post'>";
	echo "<div class='container'>";
	echo "<div class='row'>";
		
 		echo "<div class='col-xs-12 col-sm-4 col-md-4'>";
echo "<div class='form-group'>";

	  
	   
	
echo "<label for='userId' class='col-xs-4 control-label'>Id</label>";
 

echo "<div class='col-xs-8'>";

		
	echo "<p>".$row['id']."</p>";
 	echo "<input name='uid' type='hidden' value='".$row['id']."''>";
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
 	echo "<label for='password' class='col-xs-4 control-label'>Password</label>";
 	echo "<div class='col-xs-8'>";
 	echo "<p><input type=password name=password value=".$row['password']."></p>";
 	echo "</div>";
    echo  "</div>";
 	echo "<div class='form-group'>";
	echo "<label for='loginType' class='col-xs-4 control-label'>User Type</label>";
 	echo "<div class='col-xs-8'>";
 	
 	
 	?>
 	<?php echo "<td>" ."<select name=loginType id='loginType'>";
     $s="select typeId,type from usertype";
	$q=mysql_query($s) or die($s);
while($rw=mysql_fetch_array($q))
{
	?>
<option value="<?php echo $rw['typeId'] ?>"<?php if($row['usertypeId']==$rw['typeId']) echo 'selected=selected'?>><?php echo $rw['type'] ?></option>
<?php } 
echo "</select>". "</td><br /><br />"; 	
echo "</div>";
echo  "</div>";
 	echo "<div class='form-group'>";
    echo "<div class='col-xs-offset-0 col-xs-10'>";
   echo "<button type='submit' id='saveButton' class=\"btn btn-default\">Save</button>&nbsp";
 	echo "<a class=\"btn btn-default\" id='cancel' class='cancel' href=\"viewUser.php \">Cancel</a>";
echo "</div>";
echo  "</div>";
echo "</div>";
echo  "</div>";
echo  "</div>";
?>
    