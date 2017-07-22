<?php
error_reporting(0);	
session_start();
$value=$_SESSION['val'];
//echo $value;
 error_reporting(0);
?><!DOCTYPE html>
<html lang="en">
<br>
	
	
   
 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

   
    
	<?php
	$value=$_SESSION['val'];
 //var_dump($value);
	//echo $value;
	
	?>
   
   
	
	<style>	
	.black {
	border:0.1px solid black;
    float: left;
    width: 70px;
    height: 70px;
    background-color: #999;
      font-size:50px;
    text-align:center;
    display: table-cell;
    vertical-align:middle;
}
   .white {
	border:0.1px solid black;
    float: left;
    width: 70px;
    height: 70px;
    background-color: #fff;
    font-size:50px;
    text-align:center;
    display: table-cell;
    vertical-align:middle;
}

</style>
<link href="css/button.css" rel="stylesheet" type="text/css">
	<center>
	        <body>
		<h2 style=" font-size:30px; font-style: italic;    font-family: initial;    color: cornsilk;">The Solution For placing <?php echo $value?> queen <?php echo $value?>x<?php echo $value?> in chess board is</h2>	
<div class="active" class="modal fade" id="myModal" style="margin-top: 100px; ;" tabindex="-1"  aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title" id="myModalLabel">Solution</h4>
      </div>
      <div class="modal-body">
        <div class="row" style="padding-bottom:0px;">
  <div class="col-md-12">
  
    
   <?php
   
  	  if($value==1)
	  {
		?><center>
		<p>Trivial Solution...</p><br>
		 <div style="margin-left:230px" class="white">&#9812;</div>
		</center>
<?php		
	  }
?>
	
	
	
 <?php
   
  	  if($value==2)
	  {
		

?>
<p><b>No solution...</p></b>
<div style="width:140px">
<div id="a0" class="black"></div>  
<div id="a1" class="white"></div>  
<div id="a2" class="white"></div>  
<div id="a3" class="black"></div>  
</div>

<?php			
	  }
?>



	
	 <?php
   
  	  if($value==3)
	  {
		?>
		
		
	<p><b>No solution...</p></b>
<div style="width:210px">
<div id="a0" class="black"></div>  
<div id="a1" class="white"></div>  
<div id="a2" class="black"></div>  
<div id="a3" class="white"></div>  
<div id="a2" class="black"></div>  
<div id="a3" class="white"></div> 
<div id="a3" class="black"></div>  
<div id="a2" class="white"></div>  
<div id="a3" class="black"></div> 
</div>
		
<?php	  
	  }
?>
	
	
  </div>
</div>


      </div>
  
    </div>
  </div>
</div>
<style>
  #myModal .modal-header {
    background: #ee3339;
    color: white;
  }
  #myModal .modal-header button {
    color: white;
  }
</style>

</center>
 <div style="clear:both"></div></br></br>
 <input style="margin-left:45%" type="button" class="myButton" value="Go Back" onclick="location.href='destroy.php'">


 
 
		<script src="js/jquery-1.11.1.min.js"></script>
      
        <script src="js/jquery.backstretch.min.js"></script>
       
        <script src="js/scripts.js"></script>
        
    
    </body>
<?php
session_destroy();
?>
</html>