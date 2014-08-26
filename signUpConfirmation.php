<!--  signUpConfirmation.php 
      page that handles the process of signup form detail validation and display 
      a confirmation message to user on successful registration.
  
  Revision History

            Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.05.20: Created
      
 -->

<?php
include("navbarhome.php");

?>
<br />
<br />
<br />
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
<?php
include("dataValidation.php");
include("userClass.php");

$response=array();	
	$userId=trim($_POST["userId"]);
	$forename=trim($_POST["forename"]);
	$surname=trim($_POST["surname"]);
	$emailId=trim($_POST["emailId"]);
	$password=trim($_POST["password"]);
	$confirmPassword=trim($_POST["confirmPassword"]);
	$signUpFormErrors=array();

	if(isEmpty($userId==true)) array_push($signUpFormErrors,"User ID");

	if(isEmpty($forename==true)) array_push($signUpFormErrors,"Forename");
if(isEmpty($surname==true)) array_push($signUpFormErrors,"Surname");
	if($password=="" || $password!=$confirmPassword)array_push($signUpFormErrors,"passwords doesnt match");

if(isEmailAddressValid($emailId)==false) array_push($signUpFormErrors,"please enter email address e.g. abc@xyz.com,abc@xyz.ca");
if(count($signUpFormErrors) != 0) { 
		echo "<p>Please go back and correct the  following information:</p>";
		echo "<ul>";
		foreach($signUpFormErrors as $signUpFormError) echo"<li>$signUpFormError</li>";
		echo "</ul>";
		}
		else
    
    

{
    $userId=trim($_POST["userId"]);

	$forename=trim($_POST["forename"]);
	$surname=trim($_POST["surname"]);
	$emailId=trim($_POST["emailId"]);
	$password=trim($_POST["password"]);
	$userTypeId=2;
	
	try
	{
	mysql_connect("127.8.48.130:3306","adminyfbkrFb","Ceb9vA6uka3N");	
	mysql_select_db("libapp");
$u=new User($userId,$forename,$surname,$emailId,$password,$userTypeId);

	
	$res=mysql_query("INSERT INTO user 


	VALUES ('$u->UserId', '$u->Forename','$u->Surname','$u->EmailId','$u->Password',2)");
	


$rc = mysql_affected_rows();
	if($rc > 0)
	{
echo '<script language="javascript">';
echo    "if(confirm('Registered Successfully!')) 
{ window.location.href = 'signInForm.php';
   }";
  

  echo '</script>';

	}	
	else
	{
	echo '<script language="javascript">';
  echo "if(confirm('Registration failed!')) 
{ window.location.href = 'home.php';
   }";  
  echo '</script>';
	}
}
catch(mysqlException $e)
{
	

	{
	die("Data could not be entered" . mysql_error());

	}
    
}	

	
}	

?>

