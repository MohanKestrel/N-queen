<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>'N' Queen Problem</title>

 
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

   
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
   
    <link href="css/style.css" rel="stylesheet">
	<link href="css/default.css" rel="stylesheet">
    
   <?php
   error_reporting(0);
  if($_POST['solution']!=NULL) 
 {
  session_start();
 $no=$_POST['solution'];
 
 $_SESSION['val']=$no;
 var_dump($_SESSION['val']);

 
 if($_POST['solution']>3)
      header("Location:$no-result.php");
  if($_POST['solution']==8)
  {header("Location:result.php");
	  echo $no;
  }
	  if($_POST['solution']<4)
			 header("Location:1result.php");
 }?>
</head>
<style>

.alert {
    padding: 20px;
    background-color: lightgreen;
    color: darkblue;
	height:200px;
	margin:2%;

}
</style>


    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1>N Queen Problem</h1>
                </a>
            </div>

          
         
        </div>
      
    </nav>

	
    <section id="intro" class="intro">
	
		<div class="slogan">
			<h2 style="color:cornflowerblue;font-family:cursive">N QUEEN PROBLEM </h2>
			
		</div>
		<div class="page-scroll" >
			<a href="#solution" class="btn btn-circle" style="border:2px solid grey" >
				<i class="fa fa-angle-double-down animated" style="color:grey"></i>
			</a>
		</div>
    </section>

    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Chess-The Mind Game</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
            <div class="col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
						
                        <div class="avatar"><img src="img/team/1.jpg" alt="" class="img-responsive img-circle" /></div>
                    </div>
                </div>
				</div>
            </div>
			<div class="col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.5s">
                <div class="team boxed-grey">
                    <div class="inner">
						
                        <div class="avatar"><img src="img/team/2.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
			<div class="col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.8s">
                <div class="team boxed-grey">
                    <div class="inner">
						
                        <div class="avatar"><img src="img/team/3.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
			<div class="col-md-3">
				<div class="wow bounceInUp" data-wow-delay="1s">
                <div class="team boxed-grey">
                    <div class="inner">
						
                        <div class="avatar"><img src="img/team/4.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
        </div>		
		</div>
	</section>
	
	
	
    <section id="solution" class="home-section text-center bg-gray">
			<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Solution</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		
		    
		<div class="alert">
 
                           <form id="my"  method="post">
			                    	<div class="form-group">
			             <p><b>Enter the Number of queen to be placed in chessboard...<b></p>
			 	<input type="number"  min="1" max="8" name="solution"  placeholder="Enter the no. of queen..." data-rule-required="true" class="form-control"  style="width:40%;">
			                        </div>
			                <button type="submit">GET THE SOLUTION</button>

  
</div>
<br>
	</section>
	
	
	

	
	
	
	      
 



   <footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
				
   
				</div>
			</div>	
		</div>
	</footer>

  
  
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>
   
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
</body>

</html>
