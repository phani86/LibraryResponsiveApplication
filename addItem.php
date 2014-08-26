<!-- addItem.php 
	Item addition form with various fields that are validated and added to database.

	Revision History

			Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.07.12: Created
		
 -->
<?php include("adminHome.php");?>
<html>
<head>
<title>	
</title>
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

</head>	
<body>
	<h4>Item Addition Form</h4>
<br />
<form name="addItemForm" class="form-horizontal"  role="form" action="addItemConfirmation.php" method="post">
	<div class="container">
     <div class="col-xs-12 col-sm-6 col-md-4">
     <div class="row" >
<div class="col-xs-12">
  <label for="itemType">Select Item Type</label></div>
    <div class="col-xs-12"> <select name="itemType" id="itemType" class="form-control" 	onchange='myFunction(this.form)'
    	title="Please select item type" required="">
             <option value=""></option>
              <option value="Book">Book</option>
              <option value="Journal">Journal</option>
 				            
      </select>
    </div>
    </div>
<!-- </div> -->
<!-- </div> -->
	<div class="row">
	<div class="col-xs-12">

	<label for="isbn" id="isbnLabel">Enter ISBN</label></div>
	<div class="col-xs-12">	
	<input type="text" class="form-control"  placeholder="ISBN" id="isbnText" name="isbn" title="Please enter 13 digit ISBN" required=""
	pattern="[0-9]{13}"/>
  </div>
  </div>
<div class="row">
	<div class="col-xs-12">

	<label for="issn" id="issnLabel">Enter ISSN</label></div>
	<div class="col-xs-12">	
	<input type="text" class="form-control"  placeholder="ISSN" id="issnText" name="issn" title="Please enter 10 digit ISSN"  
  pattern="[0-9]{10}"/>
  </div>
  </div>
<div class="row" >
<div class="col-xs-12">
  <label for="itemCategory">Item Category</label></div>
 <div class="col-xs-12"><select name="itemCategory" id="itemCategory" class="form-control" title="Please select item category" required="">
             <option value=""></option>
              <option value="Computer">Computer</option>
              <option value="Science">Science</option> 				            
      </select>
    </div>
  </div>
<div class="row" >
	<div class="col-xs-12">
	<label for="title">Enter Title</label></div>	  
	    <div class="col-xs-12">
	<input type="text" class="form-control"  placeholder="Title" id="title" name="title" required="" title="Please enter title"
		pattern='[A-Z\ a-z\\s]*'/>
		</div>
        </div>	
	<div class="row">
<div class="col-xs-12">
<label for="author">Enter Author</label></div>	
	   
	    <div class="col-xs-12">

	<input type="text" class="form-control"  placeholder="author" id="author" name="author" required="" title="Please enter author"
pattern='[A-Z\ \ ,a-z\ \s]*'/>
        </div>
        </div>	
<div class="row">
<div class="col-xs-12">
	<label for="publisher">Enter Publisher</label></div>
	   
	    <div class="col-xs-12">
	<input type="text" class="form-control"  placeholder="publisher" id="publisher" name="publisher" required="" title="Please enter publisher" >
	 </div>
        </div>   	
<div class="row">
<div class="col-xs-12">
	<label for="publishedDate">Select Published Date</label></div>	
	   
	    <div class="col-xs-12">

<input type="text" class="datepicker" placeholder="Published Date" id="publishedDate" name="publishedDate" title="Please select published Date" 
required=""><br />

<script type="text/javascript"> 
$('.datepicker').datepicker({
    format: 'yyyy-mm-dd'
 });
</script>
    </div>
  </div>
<div class="row">
<div class="col-xs-12">
	<label for="numberOfCopies">Enter Copies</label></div>	
	   
	    <div class="col-xs-12">
	<input type="text" class="form-control"  placeholder="Copies" id="copies" name="copies" required="" title="Please enter copies 1 to 9"
	 pattern="[1-9]"/>
	 </div>
        </div>   	

	<div class="row">
<div class="col-xs-12">
	<label for="availabilityStatus">Select Availability Status</label></div>	
	   
	    <div class="col-xs-12">
	    	<select name="availabilityStatus" id="availabilityStatus" class="form-control" title="Please select availabilty status" >
             <option value=""></option>
              <option value="Available">Available</option>
              <option value="Not Available">Not Available</option>
	      </select>

	</div>
        </div>   	
 			
<div class="row">
<div class="col-xs-12">
	<label for="image">Upload Image</label></div>	
	   
	    <div class="col-xs-12">
	
<input type="file" class="form-control"  placeholder="image" id="image" name="image" accept="image /*" required="" title="Please upload item image" >
	 </div>
        </div>   	
		
<div class="row">
    <div class="col-xs-12">
      <button type="submit" class="btn btn-default">Add Item</button>
    </div>
  </div>

<script type="text/javascript">
	function myFunction(addItemForm)
		{
var x = addItemForm.itemType.selectedIndex;
var t=document.getElementsByTagName('option')[x].value;

console.log(x);
console.log(t);
		if(t=='Book')
		{
		document.getElementById('isbnLabel').style.visibility='visible';
		document.getElementById('isbnText').style.display='block';
		document.getElementById('issnLabel').style.visibility='hidden';
		document.getElementById('issnText').style.display='none';
	}
	else if(t=='Journal')
		{
		document.getElementById('isbnLabel').style.visibility='hidden';
		document.getElementById('isbnText').style.display='none';
		document.getElementById('issnLabel').style.visibility='visible';
		document.getElementById('issnText').style.display='block';
	}
	}
	

	</script>

<!-- </div>
</div>
 -->
</div>
</div>
</form>

</body>

</html>