<!--  myBooks.php
      Page that displays list and details of taken items(Books) in user account.
    

      Revision History

            Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.07.27: Created
    
 --> 

<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

$userId =null;
$userTypeId=null;
if (ISSET($_SESSION['signedUser']))
 {
  $userId = $_SESSION['signedUser'];

}	
if (ISSET($_SESSION['userType']))
 {
$userTypeId = $_SESSION['userType'];
if($userTypeId==2)
{
  include("facultyHome.php");
}
if($userTypeId==3)
{
  include("facultyHome.php");
}

}
echo "<br />";
echo "<br />";

try
{
  mysql_connect("127.8.48.130:3306","adminyfbkrFb","Ceb9vA6uka3N"); 
  mysql_select_db("libapp");

	$result=mysql_query("SELECT * FROM user where id='$userId'");
}

catch(mysqlException $e)
{
  

  {
  die("Data could not be read" . mysql_error());

  }
}

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="styles/css/bootstrap.css" rel="stylesheet">
<link href="styles/css/bootstrap.min.css" rel="stylesheet">
<link href="styles/css/style.css" rel="stylesheet">
<link href="styles/css/datepicker.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 --><script type="text/javascript"  src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>

<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.js"></script> -->
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
<style>
.ui-tooltip {
    width: 310px;
  }
  </style>
  <script>
  $(function() {
    var tooltips = $( "[title]" ).tooltip({
      position: {
                my: "top",
        at: "top-40"

      }
    });
  });
</script>
<style type="text/css">

#searchText
{
display:none;
}
#search
{
	display:none;
}
#maxItem
{
  margin-top:40px;
}
 	</style>

</head>
<body>
  <form id='myForm' method="post">
<div class="container">
       <div class="col-xs-12 col-sm-6 col-md-4">
  <div class="row" >
      <div class="col-xs-12">
  <label for="maxItem" id="maxItem">Max Items</label></div>      
      <div class="col-xs-12">
  <input type="text" class="form-control"  placeholder="Max Items" id="maxItems" name="maxItems" readonly="readonly"
  value="<?php $s="select maxItems from user_account where userId='$userId'";
	$q=mysql_query($s) or die($s); $rw=mysql_fetch_array($q);
  echo $rw['maxItems'];?>" ><br />    
    </div>
    </div>
 <div class="row" >
      <div class="col-xs-12">
  <label for="itemsTaken">Taken Items</label></div>      
      <div class="col-xs-12">
  <input type="text" class="form-control"  placeholder="Taken Items" id="takenItem" name="takenItem" readonly="readonly"
  value="<?php $s="select takenItems from user_account where userId='$userId'";
  $q=mysql_query($s) or die($s); $rw=mysql_fetch_array($q);
echo $rw['takenItems'];?>"/><br />    
    </div>
    </div>
<?php
echo "<div class='panel-group' id='accordion'>";
echo  "<div class='panel panel-default'>";
echo  "<div class='panel-heading'>";
echo   "<h4 class='panel-title'>";
echo    "<a data-toggle='collapse' data-parent='#accordion' href='#itemDetails'> Click for Item Details </a>";
 echo      "</h4>";
 echo    "</div>";
 echo    "<div id='itemDetails' class='panel-collapse collapse in'>";
  echo     "<div class='panel-body'>";
  $s="select itemId,issuedDate,dueDate,title,typeName from user_item,item,item_type where userId='$userId' and user_item.itemId = item.id AND item.typeId = item_type.id";

   $q=mysql_query($s) or die($s); 
  
while($rw=mysql_fetch_array($q))
{
echo "<p>Item Id: " .$rw['itemId']."</p>";
echo "<p>Item Title: " .$rw['title']."</p>";
echo "<p>Item Type: " .$rw['typeName']."</p>";
echo "<p>Issued Date: " .$rw['issuedDate']."</p>";
echo "<p>Due Date: " .$rw['dueDate']."</p>";
}
echo "</div>";
echo "</div>";
echo "</div>";
  
?>
</div>
</div>
</form>
</body>