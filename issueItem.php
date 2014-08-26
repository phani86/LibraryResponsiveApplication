<!--  issueItem.php
      Issue Item page that captures the form details for  issue of an item.
    

      Revision History

            Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.07.25: Created
    
 -->
<?php
include("adminHome.php");
?>
<br />
<br />
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
<style>
#reserve
{
  display: none;
}
h2
{
  margin-top:50px;
  padding:20px;

}
</style>

</head>
<body>
	<h2>Issue Item</h2>
<div class="container">
       <div class="col-xs-12 col-sm-6 col-md-4">

<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#issueItem" role="tab" data-toggle="tab">Issue</a></li>
  <li><a href="#searchItem" role="tab" data-toggle="tab">Search</a></li>
  
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="issueItem">
    <form id="itemIssueForm" class="form-horizontal" role="form" action="issueItemConfirmation.php" method="post">
    <div class="row" >
<div class="col-xs-12">
    
  <label for="userId">User ID</label></div>
  <div class="col-xs-12">
  <input type="text" class="form-control"  placeholder="User ID" id="userId" name="userId" title="Please enter  User ID."/><br />
    </div>
        </div>
      
  <div class="row" >
      
      <div class="col-xs-12">
  <label for="itemId">Item ID</label></div>      
      <div class="col-xs-12">
  <input type="text" class="form-control"  placeholder="itemId" id="itemId" name="itemId" title="Please enter Item ID."/><br />
    
    </div>
        </div>
  <div class="row" >
      
      <div class="col-xs-12">
        
  <label for="issuedDate">Issued Date</label></div>      
      <div class="col-xs-12">
  <input type="text"  class="form-control" placeholder="Issued Date" id="issuedDate" name="issuedDate" readonly="readonly" value="<?php echo date('Y-m-d');?>" />
 <br />
    </div>
    </div>
<div class="row" >
      
<div class="col-xs-12">
  
<label for="dueDate">Due Date</label></div> 
      <div class="col-xs-12">
<input type="text" class="datepicker" placeholder="Due Date" id="dueDate" name="dueDate" title="Please select Due Date"><br /><br />
<script type="text/javascript"> 
$('.datepicker').datepicker({
    format: 'yyyy-mm-dd'
 });
</script>
</div>
</div>
<div class="row">
    <div class="col-xs-12">
      <button type="submit" id="issueItem" class="btn btn-primary ">Issue Item</button>
       </div>
     </div>   
 </div>
</form>
  <div class="tab-pane" id="searchItem">
    <div id="itemAvailability">
</div>
<div id="singleBookDetails"> </div>

    <form id="itemSearchForm" class="form-horizontal" role="form" method="post">
    <div class="containerSearch">
  <div class="helper">
    <div class="content">
      <div class="input-group">
        <input class="form-control" type="text" name="searchText" id="searchText"  placeholder="search" required="" title="Enter ISBN,Title or Author" size="50" />
          <span class="input-group-btn">
            <button class="btn btn-primary" id="search">
            <span class="glyphicon glyphicon-search" id="glys"></span></button>
          </span>  
         
</div>
    </div><!-- /input-group -->
  </div>
  
  </form>

</div>
</div>
  </div>
</div>  
<script type="text/javascript">
$(function() {
  $("#search").click(function(){
      var dataString = $('#itemSearchForm').serialize(); 
      $.ajax({
        type: "POST",
        url: "http://localhost/LibraryApp/itemAvailability.php",
        data:dataString,
      success: function(data){

                $('#itemAvailability').html(data);
                
        }
      });
               return false;

});
});
</script>   

<script type="text/javascript">

$('a.itemTitle').on('click', function(e) {
  var link = $(this).attr('href');
console.log(link);
  $.ajax({
    type: 'GET',
    url: link,
    success: function(data) {
      $('#singleBookDetails').html(data);
    }
  })
e.preventDefault();
})
</script>
</div>
</div>
