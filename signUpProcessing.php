<!--  signUpProcessing.php 
      page that handles the process of signup form detail validation and display 
      a confirmation message to user on successful registration.
  
  Revision History

            Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.05.20: Created
      
 -->
<?php

	include("dataValidation.php");

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

if(isEmailAddressValid($emailId)==false) array_push($orderFormErrors,"please enter email address e.g. abc@xyz.com,abc@xyz.ca");
?>


<?xml version="1.0" encoding="UTF-8"?>
		
<!--	signUpProcessing.php
		Signup form for new user registration.

		Revision History
			Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.07.10: Created
-->

<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Account Registration Form </title>
		<meta name="author" content="LibraryApp" />
	</head>

	<body>
		<?php if(count($signUpFormErrors) != 0) { 
		echo "<p>Please go back and correct the  following information:</p>";
		echo "<ul>";
		foreach($signUpFormErrors as $signUpFormError) echo"<li>$signUpFormError</li>";
		echo "</ul>";
		}
		else
		{
		echo "<p>";
		echo "Please confirm the following inputted information:<br />";
		echo "User Id:$userId<br />";
		echo "Forename:$forename<br />";
		echo "Surname:$surname<br />";
		echo "Email Address:$emailId<br />";
		echo "Password:$password<br />";
		echo "</p>";
		//echo "<input type='button' value='Submit' />";
		
		?>
		
		<form action="signUpConfirmation.php" method="post">
		<input type="hidden" name="userId" value="<?php echo $userId;?> "/>
		<input type="hidden" name="forename" value="<?php echo $forename;?> "/>
		<input type="hidden" name="surname" value="<?php echo $surname;?> "/>
		<input type="hidden" name="emailId" value="<?php echo $emailId;?> "/>

		<input type="hidden" name="password" value="<?php echo $password;?> "/>
		<input type="submit" value="Submit" />
		</form>
	<?php
	}
	?>
</body>
</html>
