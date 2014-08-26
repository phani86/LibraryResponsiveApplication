<!--  deleteUser.php
      User deletion page that handles the process of deletion.
    

      Revision History

            Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.06.10: Created
    
 -->
<?php

	echo $id = $_GET['id'];
try{
 	mysql_connect("localhost", "root", "") or die("Could not find the server");

 	mysql_select_db("LibraryData") or die("Could not find the database");

 	$result = mysql_query("SELECT * FROM user where id=$id");
		//echo $result;

 	$row = mysql_fetch_array($result);

 	echo "<h3>You are about to delete a row</h3>";

 	echo "id: " . $row['id']. "<br />";
 	echo "";
 	$deletedRows=mysql_query("Delete from user where id=$id");
 	echo "Deleted data successfully";	
 	header("Location: viewUser.php");
 	}
 	
catch(mysqlException $e)
{
 	
	  die('Could not delete data: ' . mysql_error());
 	
}	
 	//mysql_close();












// session_start();


// 	mysql_select_db("LibraryData");
// $userId =null;

// function deleteRow($userId) {

// 	echo $userId;
// }
// 	$result=mysql_query("DELETE FROM user WHERE userId='$userId'");
	
// 	if(!$result)
// 	{
// 	  die('Could not delete data: ' . mysql_error());
// 	}
	
// 	echo "Deleted data successfully\n";	
// 	       // header("Location: viewUser.php");

//     

?>