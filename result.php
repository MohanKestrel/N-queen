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
  
    height: 600px;
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
                $_SESSION['count'] = 64;
            }else{
					$count = $_SESSION['count'] + 64;
                $_SESSION['count'] = $count;
				}
            }
        
        //echo $_SESSION['count'];
      
	  
	  
	  
	 
        
 
   $run='programs\8q.exe';




	
$str = exec($run);
$len=strlen($str);
  $val=8;
//var_dump($str);
 $cou=$_SESSION['count'];
 
 if($cou<$len){
 if($cou>0)
	 {
	 //var_dump($cou);

			
	
		$arr1=substr($str,$cou,64);
	}
	else
		$arr1=substr($str,$cou,64);
		
 }
 else{
	 $_SESSION['count']=0;
	 $arr1=substr($str,$_SESSION['count'],64);
	
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


<h2 style="  font-style: italic;    font-family: inherit;    color: cornsilk;">The Solution For placing <?php echo $val?> queen <?php echo $val?>x<?php echo $val?> in chess board is</h2>	
<h2 style="  font-style: italic;    font-family: inherit;    color: cornsilk;">There are totally <b>92</b> solutions</h2>	


<div style="float:left;margin-left:350px">
	<div class="chessboard"  >
	
	

<div id="a0" class="black"></div>   <div id="q0" class="black">&#9812;</div>
<div id="a1" class="white"></div>    <div id="q1" class="white">&#9812;</div>
<div id="a2" class="black"></div>   <div id="q2" class="black">&#9812;</div>
<div id="a3" class="white"></div>  <div id="q3" class="white">&#9812;</div>
<div id="a4" class="black"></div>  <div id="q4" class="black">&#9812;</div>
<div id="a5" class="white"></div>  <div id="q5" class="white">&#9812;</div>
<div id="a6" class="black"></div>  <div id="q6" class="black">&#9812;</div>
<div id="a7" class="white"></div>  <div id="q7" class="white">&#9812;</div>

<div id="a8" class="white"></div>   <div id="q8" class="white">&#9812;</div>
<div id="a9" class="black"></div>    <div id="q9" class="black">&#9812;</div>
<div id="a10" class="white"></div>   <div id="q10" class="white">&#9812;</div>
<div id="a11" class="black"></div>  <div id="q11" class="black">&#9812;</div>
<div id="a12" class="white"></div>  <div id="q12" class="white">&#9812;</div>
<div id="a13" class="black"></div>  <div id="q13" class="black">&#9812;</div>
<div id="a14" class="white"></div>  <div id="q14" class="white">&#9812;</div>
<div id="a15" class="black"></div>  <div id="q15" class="black">&#9812;</div>

<div id="a16" class="black"></div>   <div id="q16" class="black">&#9812;</div>
<div id="a17" class="white"></div>    <div id="q17" class="white">&#9812;</div>
<div id="a18" class="black"></div>   <div id="q18" class="black">&#9812;</div>
<div id="a19" class="white"></div>  <div id="q19" class="white">&#9812;</div>
<div id="a20" class="black"></div>  <div id="q20" class="black">&#9812;</div>
<div id="a21" class="white"></div>  <div id="q21" class="white">&#9812;</div>
<div id="a22" class="black"></div>  <div id="q22" class="black">&#9812;</div>
<div id="a23" class="white"></div>  <div id="q23" class="white">&#9812;</div>

<div id="a24" class="white"></div>   <div id="q24" class="white">&#9812;</div>
<div id="a25" class="black"></div>    <div id="q25" class="black">&#9812;</div>
<div id="a26" class="white"></div>   <div id="q26" class="white">&#9812;</div>
<div id="a27" class="black"></div>  <div id="q27" class="black">&#9812;</div>
<div id="a28" class="white"></div>  <div id="q28" class="white">&#9812;</div>
<div id="a29" class="black"></div>  <div id="q29" class="black">&#9812;</div>
<div id="a30" class="white"></div>  <div id="q30" class="white">&#9812;</div>
<div id="a31" class="black"></div>  <div id="q31" class="black">&#9812;</div>

<div id="a32" class="black"></div>   <div id="q32" class="black">&#9812;</div>
<div id="a33" class="white"></div>    <div id="q33" class="white">&#9812;</div>
<div id="a34" class="black"></div>   <div id="q34" class="black">&#9812;</div>
<div id="a35" class="white"></div>  <div id="q35" class="white">&#9812;</div>
<div id="a36" class="black"></div>  <div id="q36" class="black">&#9812;</div>
<div id="a37" class="white"></div>  <div id="q37" class="white">&#9812;</div>
<div id="a38" class="black"></div>  <div id="q38" class="black">&#9812;</div>
<div id="a39" class="white"></div>  <div id="q39" class="white">&#9812;</div>

<div id="a40" class="white"></div>   <div id="q40" class="white">&#9812;</div>
<div id="a41" class="black"></div>    <div id="q41" class="black">&#9812;</div>
<div id="a42" class="white"></div>   <div id="q42" class="white">&#9812;</div>
<div id="a43" class="black"></div>  <div id="q43" class="black">&#9812;</div>
<div id="a44" class="white"></div>  <div id="q44" class="white">&#9812;</div>
<div id="a45" class="black"></div>  <div id="q45" class="black">&#9812;</div>
<div id="a46" class="white"></div>  <div id="q46" class="white">&#9812;</div>
<div id="a47" class="black"></div>  <div id="q47" class="black">&#9812;</div>

<div id="a48" class="black"></div>   <div id="q48" class="black">&#9812;</div>
<div id="a49" class="white"></div>    <div id="q49" class="white">&#9812;</div>
<div id="a50" class="black"></div>   <div id="q50" class="black">&#9812;</div>
<div id="a51" class="white"></div>  <div id="q51" class="white">&#9812;</div>
<div id="a52" class="black"></div>  <div id="q52" class="black">&#9812;</div>
<div id="a53" class="white"></div>  <div id="q53" class="white">&#9812;</div>
<div id="a54" class="black"></div>  <div id="q54" class="black">&#9812;</div>
<div id="a55" class="white"></div>  <div id="q55" class="white">&#9812;</div>

<div id="a56" class="white"></div>   <div id="q56" class="white">&#9812;</div>
<div id="a57" class="black"></div>    <div id="q57" class="black">&#9812;</div>
<div id="a58" class="white"></div>   <div id="q58" class="white">&#9812;</div>
<div id="a59" class="black"></div>  <div id="q59" class="black">&#9812;</div>
<div id="a60" class="white"></div>  <div id="q60" class="white">&#9812;</div>
<div id="a61" class="black"></div>  <div id="q61" class="black">&#9812;</div>
<div id="a62" class="white"></div>  <div id="q62" class="white">&#9812;</div>
<div id="a63" class="black"></div>  <div id="q63" class="black">&#9812;</div>

</div>


	
	
	</center>	
	</div>

	<div style="float:right;margin-right:10%;margin-top:-30%;">
	
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