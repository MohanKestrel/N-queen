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
                $_SESSION['count'] = 25;
            }else{
					$count = $_SESSION['count'] + 25;
                $_SESSION['count'] = $count;
				}
            }
        

//echo $_POST['solution'];
$run='programs\5q.exe';




	
$str = exec($run);

$len=strlen($str);
  
	  $val=5;
	$cou=$_SESSION['count'];
 
 if($cou<$len){
 if($cou>0)
	 {
	 //var_dump($cou);

			
	
		$arr1=substr($str,$cou,25);
	}
	else
		$arr1=substr($str,$cou,25);
		
 }
 else{
	 $_SESSION['count']=0;
	 $arr1=substr($str,$_SESSION['count'],25);
	
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

  
	  ?>

<center>






<?php
if($val==5)
{
	?>
<style>
.chessboard{
 width:370px;
height:00px;
  margin:9%;
}
</style>
<?php
}
?>




<h2 style="  font-style: italic;    font-family: inherit;    color: cornsilk;">The Solution For placing <?php echo $val?> queen <?php echo $val?>x<?php echo $val?> in chess board is</h2>	
<h2 style="  font-style: italic;    font-family: inherit;    color: cornsilk;">There are totally <b>10</b> solutions</h2>	
	<div style="float:left;margin-left:450px">
	
	<div class="chessboard" >
	
	

<div id="a0" class="black"></div>   <div id="q0" class="black">&#9812;</div>
<div id="a1" class="white"></div>    <div id="q1" class="white">&#9812;</div>
<div id="a2" class="black"></div>   <div id="q2" class="black">&#9812;</div>
<div id="a3" class="white"></div>  <div id="q3" class="white">&#9812;</div>
<div id="a4" class="black"></div>  <div id="q4" class="black">&#9812;</div>


<div id="a5" class="white"></div>  <div id="q5" class="white">&#9812;</div>
<div id="a6" class="black"></div>  <div id="q6" class="black">&#9812;</div>
<div id="a7" class="white"></div>  <div id="q7" class="white">&#9812;</div>
<div id="a8" class="black"></div>   <div id="q8" class="black">&#9812;</div>
<div id="a9" class="white"></div>    <div id="q9" class="white">&#9812;</div>


<div id="a10" class="black"></div>   <div id="q10" class="black">&#9812;</div>
<div id="a11" class="white"></div>  <div id="q11" class="white">&#9812;</div>
<div id="a12" class="black"></div>  <div id="q12" class="black">&#9812;</div>
<div id="a13" class="white"></div>  <div id="q13" class="white">&#9812;</div>
<div id="a14" class="black"></div>  <div id="q14" class="black">&#9812;</div>


<div id="a15" class="white"></div>  <div id="q15" class="white">&#9812;</div>
<div id="a16" class="black"></div>   <div id="q16" class="black">&#9812;</div>
<div id="a17" class="white"></div>    <div id="q17" class="white">&#9812;</div>
<div id="a18" class="black"></div>   <div id="q18" class="black">&#9812;</div>
<div id="a19" class="white"></div>  <div id="q19" class="white">&#9812;</div>

<div id="a20" class="black"></div>  <div id="q20" class="black">&#9812;</div>
<div id="a21" class="white"></div>  <div id="q21" class="white">&#9812;</div>
<div id="a22" class="black"></div>  <div id="q22" class="black">&#9812;</div>
<div id="a23" class="white"></div>  <div id="q23" class="white">&#9812;</div>
<div id="a24" class="black"></div>   <div id="q24" class="black">&#9812;</div>

</div>


	
	
	</center>	
	</div>

	<div style="float:right;margin-right:20%;margin-top:13%;">
	
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
			<?php
if($cou==$len){
session_destroy();
}
?>	
</html>