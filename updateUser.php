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
 	mysql_connect("127.8.48.130:3306","adminyfbkrFb","Ceb9vA6uka3N");	
	mysql_select_db("libapp");
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