<!DOCTYPE html>
<html>
<head>
	<title>student managemnt </title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 
<style type="text/css">
.row{
      margin-top: 12px;
    }
</style>
</head><body style="background: #061D4B;"> 
	

  <div class="jumbotron" style="text-align: center;  line-height: 100px;  ">
   <button class="btn btn-success" type="button"  style="float: right; margin-top: -20px; margin-right: 10px;">

    <a href="login.php" style="text-decoration: none; color:white;">Admin login</a></button>
   <h1>Hi, Welcome to student manegment of system</h1>
 </div>



<div class="col-sm-12" style="margin-top: 20px; " >
	    
    <div class="row">
      <div class="col-sm-4 "></div>
      <div class=" col-sm-4 " style="background: black; height: auto; color: white ;  border-radius: 0px 0px 6% 6%; ">
        <div class="row">
        <div class="col-sm-12 panel-heading" style="text-align: center; bottom: 12px; background: blue;"><h2 style="line-height: 10px; ">Student Information</h2></div>
        </div>
        <form method="post" action="index.php">



          <div class="row" style="margin-top: 20px;">
            <div class="col-sm-1"></div>
    <div class="col-md-4"><label>Choose Standerd</label></div>
    <div class="col-md-6"><select class="form-control" name="standerd" required="">
<option>Enter Standerd</option>
<option value="1" >1st</option>
<option value="2">2nd</option>
<option value="3">3rd</option>
<option value="4">4th</option>
<option value="5">5th</option>
<option value="6">6th</option>
<option value="7">7th</option>
    </select>
  </div></div>
                    

 <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-md-4"><label>Enter Rollno</label></div>
    <div class="col-md-6"> <input type="text" name="rollno" class="form-control"  placeholder="Plasse Enter a Rollno " required="" >

   
   
  </div></div>
  <div class="row" style="height: 80px;"><div class="col-sm-5"></div>
    <div class="col-sm-6"><button type="submit" name="submit" value="show info" class="btn btn-success btn-block">Show Info</button></div>
  </div>
 
  
</form>
</div></div></div>
</body>
</html>


<?php
if (isset($_POST['submit'])) {
  $standerd=$_POST['standerd'];

$rollno=$_POST['rollno'];

include ('dbcon.php');

include ('function.php');
showdetails($standerd,$rollno);
}
?>