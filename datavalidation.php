<!--dataValidation.php

   set of functions to validate user-inputted data.

   Revision History:

       Srinivasa Phanindra Valluri,Puneet Kalva 2014.07.10 :Created 

-->

<?php

function isEmpty($string)

	{

	$result=true;

	if($string != "") $result=false;

	return $result;


	}

function isEmailAddressValid($emailId)

	{

	$emailAddressRegularExpression='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

	$result=true;

	if(preg_match($emailAddressRegularExpression,$emailId)==false) $result=false;

	return $result;	

	}














?>
