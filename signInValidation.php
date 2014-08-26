<!--  signInValidation.php 
      page that handles the process of user signin validation and redirects the user to 
      home page on succesful signin.
  
  	  Revision History

            Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.05.26: Created
      
 -->
<?php
include("navbarhome.php");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="styles/css/bootstrap.css" rel="stylesheet">
<link href="styles/css/bootstrap.min.css" rel="stylesheet">
<link href="styles/css/style.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.9.1/jquery.min.js"></script>
  <!-- // <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css"> 
<?php
include("dataValidation.php");

session_start();
$response=array();

if($_POST)
{
$userId=trim($_POST['userId']);
$password=trim($_POST['password']);

try
{
mysql_connect("localhost", "root", "");	
mysql_select_db("LibraryData");


$result = mysql_query("Select id,forename,password,usertypeId from user where id='$userId' and password='$password'");
$row =mysql_fetch_array( $result );
 
$validUser=$row['id'];
$validPassword=$row['password'];
$validUserTypeId=$row['usertypeId'];


if($userId==$validUser && $password==$validPassword)
{
	    
if($validUserTypeId==1)
{
	header("Location:adminHome.php");

}
else if($validUserTypeId==2)

{
	header("Location:studentHome.php");
}
else if($validUserTypeId==3)

{
	header("Location:facultyHome.php");
}

 }

else 
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Invalid User!')
        window.location.href='signinForm.php'
        </SCRIPT>");


}
 

$_SESSION["signedUser"]= $userId;
$_SESSION["userType"]= $row['usertypeId'];
$_SESSION["signedUserName"]=$row['forename'];
}
catch(mysqlException $e)
{
	// if(!$res)

	{
	die("Data could not be read" . mysql_error());

	}
    
}	

}
?>
