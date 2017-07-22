
<?php

session_start();
$_SESSION['start'] = 0;
 error_reporting(0);
?><!DOCTYPE html>
<html lang="en">

  
         

<meta charset="UTF-8"> 
<title>Solution</title>

<style type="text/css">

   .chessboard {
   width: 640px; 
  
    height: 640px;
    margin: 20px;
    border: 0px solid #333;
}
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
</head>

<body>
<?php
 if(isset($_POST['count'])){
            if(!($_SESSION['count'])){
                $_SESSION['count'] = 16;
            }else{
					$count = $_SESSION['count'] + 16;
                $_SESSION['count'] = $count;
				}
            }
        
        //echo $_SESSION['count'];
 
$run='programs\4q.exe';




	
$str = exec($run);
$len=strlen($str);
//echo $len;

	  $val=4;
	  $cou=$_SESSION['count'];
 
 if($cou<$len){
    if($cou>0 )
	 {
	 //var_dump($cou);

			
	
		$arr1=substr($str,$cou,16);
	}
	else
		$arr1=substr($str,$cou,16);
		
 }
 else{
	 $_SESSION['count']=0;
	 $arr1=substr($str,$_SESSION['count'],16);
	
 }
?>

<style>
  [id*="q"]{
	display:none;
  }
</style>
<?php



for( $i = 0; $i<$val*$val; $i++)
{
	if($arr1[$i]=='Q')	
	{
		?>
		<style type="text/css">
 [id="q<?php echo $i?>"]{
display:block;}
[id="a<?php echo $i?>"]{
	display:none;
  }
  
  
</style>
	<?php
	}
	else
	{
		continue;
	}
}

  for( $j = $val*$val; $j<64; $j++)
 {
	  ?>
	  <style>
  [id="a<?php echo $j?>"]{
	display:none;
  }
</style>
  <?php
	}

  ?>
<center>






<?php
if($val==4)
{
	?>
<style>
.chessboard{
 width:300px;
height:00px;
  margin:11%;
}
</style>
<?php
}
?>




	
<div style="float:left;margin-left:400px">
<h2 style="  font-style: italic;    font-family: inherit;    color: cornsilk;">The Solution For placing <?php echo $val?> queen <?php echo $val?>x<?php echo $val?> in chess board is</h2>	
<h2 style="  font-style: italic;    font-family: inherit;    color: cornsilk;">There are totally <b>2</b> solutions</h2>	



	<div class="chessboard" >
	
	

<div id="a0" class="black"></div>   <div id="q0" class="black">&#9812;</div>
<div id="a1" class="white"></div>    <div id="q1" class="white">&#9812;</div>
<div id="a2" class="black"></div>   <div id="q2" class="black">&#9812;</div>
<div id="a3" class="white"></div>  <div id="q3" class="white">&#9812;</div>


<div id="a4" class="white"></div>  <div id="q4" class="white">&#9812;</div>
<div id="a5" class="black"></div>  <div id="q5" class="black">&#9812;</div>
<div id="a6" class="white"></div>  <div id="q6" class="white">&#9812;</div>
<div id="a7" class="black"></div>  <div id="q7" class="black">&#9812;</div>


<div id="a8" class="black"></div>   <div id="q8" class="black">&#9812;</div>

<div id="a9" class="white"></div>    <div id="q9" class="white">&#9812;</div>
<div id="a10" class="black"></div>   <div id="q10" class="black">&#9812;</div>
<div id="a11" class="white"></div>  <div id="q11" class="white">&#9812;</div>

<div id="a12" class="white"></div>  <div id="q12" class="white">&#9812;</div>
<div id="a13" class="black"></div>  <div id="q13" class="black">&#9812;</div>
<div id="a14" class="white"></div>  <div id="q14" class="white">&#9812;</div>
<div id="a15" class="black"></div>  <div id="q15" class="black">&#9812;</div>

</div>

	
	
	</center>	
	
	</div>
	
	<div style="float:right;margin-right:20%;margin-top:-10%;">
	
	<form method="post" >
            <input type="submit" name="count" class="myButton"  value="Next Solution" />
		
        </form>
						
						</div>
	
 <div style="clear:both"></div></br></br>
 <input style="margin-left:45%" type="button" value="Go Back" class="myButton"  onclick="location.href='destroy.php'">




  




 

		<script src="js/jquery-1.11.1.min.js"></script>
      
        <script src="js/jquery.backstretch.min.js"></script>
       
        <script src="js/scripts.js"></script>
        
      
    </body>
			
</html>