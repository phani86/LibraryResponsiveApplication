<!--  addItemConfirmation.php 
	  Item form details are validted, added to database and displayed alert box on succesful addition. 
	   	
			Revision History

			Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.07.12: Created
	

 -->
<?php
include("adminHome.php");
require("itemClass.php");
    $itemType=trim($_POST["itemType"]);
	$isbn=trim($_POST["isbn"]);
	$issn=trim($_POST["issn"]);
	$itemCategory=trim($_POST["itemCategory"]);
	$title=trim($_POST["title"]);
	$author=trim($_POST["author"]);
	$publisher=trim($_POST["publisher"]);
	$publishedDate=trim($_POST["publishedDate"]);
	$date = explode('/', $_POST['publishedDate']);

	$pubDate = $date[2].'-'.$date[0].'-'.$date[1];
	$copies=trim($_POST["copies"]);
	$availabilityStatus=trim($_POST["availabilityStatus"]);
	$image=trim($_POST["image"]);
	
	if($itemType=="Book")
	{
		$itemTypeId=1;
	}
	else if($itemType=="Journal")
	{
		$itemTypeId=2;
	}
	if($itemCategory=="Computer")
	{
		$itemCategoryId=1;
	}
	else if($itemCategory=="Science")
	{
		$itemCategoryId=2;
	}
	
	try
	{
	mysql_connect("localhost","root","");	
	mysql_select_db("LibraryData");
$i=new Item($itemTypeId,$isbn,$issn,$itemCategoryId,$title,$author,$publisher,$pubDate,$copies,$availabilityStatus,$image);

	if($i->ItemTypeId==1)
	{
	$res=mysql_query("INSERT INTO item

	VALUES (NULL,$i->ItemTypeId,'$i->ISBN',NULL,$i->ItemCategoryId,'$i->Title','$i->Author','$i->Publisher','$i->PubDate',
	$i->Copies,'$i->AvailabilityStatus','$i->Image')");
	}
	else if($i->ItemTypeId==2)
	{
	$res=mysql_query("INSERT INTO item

	VALUES (NULL,$i->ItemTypeId,NULL,'$i->ISSN',$i->ItemCategoryId,'$i->Title','$i->Author','$i->Publisher','$i->PubDate',
	$i->Copies,'$i->AvailabilityStatus','$i->Image')");

	}	
	$rc = mysql_affected_rows();
	echo "Records inserted: " . $rc;
	
	if($rc > 0)
	{
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Item added successfully!')
        window.location.href='adminHome.php'
        </SCRIPT>");

}
else
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Item addition failed!')
        window.location.href='adminHome.php'
        </SCRIPT>");

}

}
catch(mysqlException $e)
{
	// if(!$res)

	{
	die("Data could not be entered" . mysql_error());

	}
    
}	

//echo " Item added successfully";

?>

