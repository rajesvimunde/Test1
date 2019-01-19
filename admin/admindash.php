<?php
session_start();

if(isset($_SESSION['uid']))
{
	echo "";
}
else{
	header('location:../login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>student managemnt </title>
 
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<style type="text/css">


.tex{
	font-size: 20px; font-weight: bold; margin-top: 2.50%;
}
</style>
</head><body  style="background: #061D4B;"> 
	

  <div class="jumbotron" style="text-align: center;  line-height: 100px;  ">
  	<a href="../logout.php" style="text-decoration: none; color:white;">
   <button class="btn btn-success" type="button"  style="float: right; margin-top: -20px; margin-right: 10px;"> Logout</button></a>

   <h1>Welcome to Admin Dashboard</h1>
 </div>



<div class="col-sm-12" style=" background: url();" >
	    

      
      <div class=" col-sm-2 " style="background: black; height: auto; color: white ;  margin-top: 50px;">
        <div class="row">
        <div class="col-sm-12 panel-heading" style="text-align: center; bottom: 12px; background: blue; "><p style="line-height: 25px; font-size: 25px; margin-top: 10px;">Dashboard Option</p></div>
        </div>
        <form method="post" action="login.php">



          <div class="row" style="border: 2px solid black;">
           <a href="addstudent.php" style="text-decoration: none; "> <div class="col-sm-12 btn-success" style="text-align: center; ">
            	<p class="tex">Insert Student </p>
            </div></a></div>
                    

  <div class="row" style=" border: 2px solid black;">
           <a href="updatestudent.php" style="text-decoration: none;"> <div class="col-sm-12 btn-success" style="text-align: center;">
            	<p class="tex">Update Student </p>
            </div></a></div>


  <div class="row" style="height: auto;  border: 2px solid black;">
           <a href="deletestudent.php" style="text-decoration: none;"> <div class="col-sm-12 btn-success" style="text-align: center; ">
            	<p class="tex" style="margin-top: 10px;">Delete Student</p>
            </div></a></div>
 
  
</form>
</div>

<div class="col-sm-10" style="height: 200px; line-height: 500px;">
	
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="../images/01.jpg" alt="Los Angeles" style="">
      </div>

      <div class="item">
        <img src="../images/01.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="../images/01.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>




</div>


</div></div>
</body>
</html>
