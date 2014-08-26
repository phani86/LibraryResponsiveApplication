<!--  issueItemConfirmation.php
      Valid issue form details Page that are captured  and stored in database.
    

      Revision History

            Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.07.28: Created
    
 -->
<?php
include("adminHome.php");
 include("userItemClass.php");
 $userId=trim($_POST["userId"]);
	$itemId=trim($_POST["itemId"]);
	$issuedDate=trim($_POST["issuedDate"]);
	$dueDate=trim($_POST["dueDate"]);
$date = explode('/', $_POST['dueDate']);

	$dueDateNew = $date[2].'-'.$date[0].'-'.$date[1];

try{


	mysql_connect("localhost","root","");	
	mysql_select_db("LibraryData");
	$ui=new UserItem($userId,$itemId,$issuedDate,$dueDateNew);

	
$counter2 = mysql_query("SELECT COUNT(*) AS totalrows2 FROM user_item where userId='$userId'");
$num2 = mysql_fetch_array($counter2);
$count2 = $num2["totalrows2"];
if($count2==3)
{
	echo '<script>alert("Item cant be issued as maximimum limit exceeded")</script>';
}
else 
	{
	$result = mysql_query("SELECT copies FROM item where id=$itemId");
$row=mysql_fetch_array($result);	
echo $result;

	
$resultUserType = mysql_query("SELECT usertypeId FROM user where id='$userId'");
$rowUserType=mysql_fetch_array($resultUserType);
echo $rowUserType['usertypeId'];
if($rowUserType['usertypeId']==2 || $rowUserType['usertypeId']==3)
{
if($row['copies']!=0)
{
$updateQuery=mysql_query("update item set copies=copies-1 where id=$itemId ");
}

$res=mysql_query("INSERT INTO user_item
	VALUES ('$ui->UserId',$ui->ItemId,'$ui->IssuedDate','$ui->DueDateNew')");
}

$rc = mysql_affected_rows();

if($rc>0) echo "<script>alert('Item issued')</script>";

$counter = mysql_query("SELECT COUNT(*) AS totalrows FROM user_item where userId='$userId'");
$num = mysql_fetch_array($counter);
$count = $num["totalrows"];
echo("$count");
if($count==1)
 {
$restaken=mysql_query("INSERT INTO user_account
	VALUES ('$userId',takenItems+1,DEFAULT)");
}
else
{
$result1 = mysql_query("SELECT takenItems,maxItems FROM user_account where userId='$userId'");
$rowtaken=mysql_fetch_array($result1);	

echo $rowtaken['takenItems'];
 echo $rowtaken['maxItems'];
if($rowtaken['takenItems'] <= $rowtaken['maxItems'])
{	
 $updateQuery2=mysql_query("update user_account set takenItems=takenItems+1 where userId='$userId'");	
}	

	
}
}


}
catch(mySqlException $e)	
	{

		die("Data could not be entered" . mysql_error());

	}
	
?>