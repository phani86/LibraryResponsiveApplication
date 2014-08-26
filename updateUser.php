<!--updateUser.php
	Page that handles the process of user privilege updation from student to faculty and administrator.
	
Revision History

            Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.06.19: Created
  


 -->
<?php
include("adminMenu.php");

 	if(isset($_POST['save']))
 	{
 	echo $password=$_POST['password'];
 	 }
 	 if(isset($_POST['loginType']))
 	 {
 	 	$loginType=$_POST['loginType'];
 	 	echo $loginType;
 	 }

 	try
 	{
 	mysql_connect("localhost", "root", "") or die("Could not find the server");

 	mysql_select_db("LibraryData") or die("Could not find the database");

 	$result = mysql_query("SELECT * FROM user where id='$_POST[uid]'");
		echo $result;

 	$row = mysql_fetch_array($result);

 	

 	echo "uid: " . $row['id']. "<br />";
 	echo "";
 	$updateQuery=mysql_query("update user set usertypeId='$_POST[loginType]',password='$_POST[password]'where id='$_POST[uid]'");
 	
 	echo "updated data successfully";	
 	header("Location: viewUser.php");
 }

 catch(mysqlException $e)
{

	{
	die("Data could not be updated" . mysql_error());

	}
}
?>