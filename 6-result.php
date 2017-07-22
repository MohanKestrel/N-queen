<?php

session_start();
$_SESSION['start'] = 0;
 error_reporting(0);
?>
<!DOCTYPE html>
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
                $_SESSION['count'] = 36;
            }else{
					$count = $_SESSION['count'] + 36;
                $_SESSION['count'] = $count;
				}
            }
        
        //echo $_SESSION['count'];
 

$run='programs\6q.exe';




	
$str = exec($run);
$len=strlen($str);

	  $val=6;
	$cou=$_SESSION['count'];
 
 if($cou<$len){
    if($cou>0 )
	 {
	 //var_dump($cou);

			
	
		$arr1=substr($str,$cou,36);
	}
	else
		$arr1=substr($str,$cou,36);
		
 }
 else{
	 $_SESSION['count']=0;
	 $arr1=substr($str,$_SESSION['count'],36);
	
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

  for( $j = $val*$val; $j<36; $j++)
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
if($val==6)
{
	?>
<style>
.chessboard{
 width:440px;
 height:00px;
  margin:5%;
}
</style>
<?php
}
?>
	
<div style="float:left;margin-left:400px">
<h2 style="  font-style: italic;    font-family: inherit;    color: cornsilk;">The Solution For placing <?php echo $val?> queen <?php echo $val?>x<?php echo $val?> in chess board is</h2>	
<h2 style="  font-style: italic;    font-family: inherit;    color: cornsilk;">There are totally <b>4</b> solutions</h2>	


	<div class="chessboard" >
	
	

<div id="a0" class="black"></div>   <div id="q0" class="black">&#9812;</div>
<div id="a1" class="white"></div>    <div id="q1" class="white">&#9812;</div>
<div id="a2" class="black"></div>   <div id="q2" class="black">&#9812;</div>
<div id="a3" class="white"></div>  <div id="q3" class="white">&#9812;</div>
<div id="a4" class="black"></div>  <div id="q4" class="black">&#9812;</div>
<div id="a5" class="white"></div>  <div id="q5" class="white">&#9812;</div>

<div id="a6" class="white"></div>  <div id="q6" class="white">&#9812;</div>
<div id="a7" class="black"></div>  <div id="q7" class="black">&#9812;</div>
<div id="a8" class="white"></div>   <div id="q8" class="white">&#9812;</div>
<div id="a9" class="black"></div>    <div id="q9" class="black">&#9812;</div>
<div id="a10" class="white"></div>   <div id="q10" class="white">&#9812;</div>
<div id="a11" class="black"></div>  <div id="q11" class="black">&#9812;</div>

<div id="a12" class="black"></div>  <div id="q12" class="black">&#9812;</div>
<div id="a13" class="white"></div>  <div id="q13" class="white">&#9812;</div>
<div id="a14" class="black"></div>  <div id="q14" class="black">&#9812;</div>
<div id="a15" class="white"></div>  <div id="q15" class="white">&#9812;</div>
<div id="a16" class="black"></div>   <div id="q16" class="black">&#9812;</div>
<div id="a17" class="white"></div>    <div id="q17" class="white">&#9812;</div>

<div id="a18" class="white"></div>   <div id="q18" class="white">&#9812;</div>
<div id="a19" class="black"></div>  <div id="q19" class="black">&#9812;</div>
<div id="a20" class="white"></div>  <div id="q20" class="white">&#9812;</div>
<div id="a21" class="black"></div>  <div id="q21" class="black">&#9812;</div>
<div id="a22" class="white"></div>  <div id="q22" class="white">&#9812;</div>
<div id="a23" class="black"></div>  <div id="q23" class="black">&#9812;</div>

<div id="a24" class="black"></div>   <div id="q24" class="black">&#9812;</div>
<div id="a25" class="white"></div>    <div id="q25" class="white">&#9812;</div>
<div id="a26" class="black"></div>   <div id="q26" class="black">&#9812;</div>
<div id="a27" class="white"></div>  <div id="q27" class="white">&#9812;</div>
<div id="a28" class="black"></div>  <div id="q28" class="black">&#9812;</div>
<div id="a29" class="white"></div>  <div id="q29" class="white">&#9812;</div>

<div id="a30" class="white"></div>  <div id="q30" class="white">&#9812;</div>
<div id="a31" class="black"></div>  <div id="q31" class="black">&#9812;</div>
<div id="a32" class="white"></div>   <div id="q32" class="white">&#9812;</div>
<div id="a33" class="black"></div>    <div id="q33" class="black">&#9812;</div>
<div id="a34" class="white"></div>   <div id="q34" class="white">&#9812;</div>
<div id="a35" class="black"></div>  <div id="q35" class="black">&#9812;</div>
</div>
	
	
	</center>	
	
	
	</div>
	
	
	<div style="float:right;margin-right:20%;margin-top:-15%;">
	
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