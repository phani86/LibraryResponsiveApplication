<!--  signOut.php 
      page that handles the process of user signout from the application.
  
  Revision History

            Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.05.28: Created
      
 -->

<?php
session_start();
if (ISSET($_SESSION['signedUser']))
unset($_SESSION['signedUser']);
if (ISSET($_SESSION['userType']))
unset($_SESSION['userType']);


echo '<script language="javascript">';
echo    "if(confirm('Do you really want to signout?')) 
{ window.location.href = 'signInForm.php';
   }";
  echo '</script>';

?>