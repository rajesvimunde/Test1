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
<?php
include ('../dbcon.php');
$sid = $_GET['sid'];
$sql="SELECT * FROM `student` WHERE `id`='$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);


?>


<!DOCTYPE html>
<html>
<head>
	<title>student managemnt </title>

  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
 

<style type="text/css">
.row{
      margin-top: 12px;
    }

    .tex{
  font-size: 20px; font-weight: bold; margin-top: 2.50%;
}

</style>
</head><body  style="background: #061D4B;"> 
	

  <div class="jumbotron" style="text-align: center;  line-height: 100px;  ">

           <a href="admindash.php" style="text-decoration: none; color:white;">  <button class="btn btn-success" type="button"  style="float: left; margin-top: -20px; margin-left: 10px;">
Back</button></a>


<a href="..//logout.php" style="text-decoration: none; color:white;">
   <button class="btn btn-success" type="button"  style="float: right; margin-top: -20px; margin-right: 10px;">
Logout</button></a>

   <h1>Welcome to student manegment of system</h1>
 </div>



<div class="col-sm-12" style="margin-top: 40px; background: url();" >
	    
      <div class="col-sm-4"></div>



 
      <div class=" col-sm-4 " style="background: black; height: auto; color: white ; border-radius: 0px 0px 6% 6%; ">
        <div class="row">
        <div class="col-sm-12 panel-heading" style="text-align: center; bottom: 12px; background: blue; "><h2 style="line-height: 10px; " >Update</h2></div>
        </div>
        <form method="post" action="updatedata.php" enctype="multipart/form-data">



          <div class="row" style="margin-top: 20px;">
            <div class="col-sm-1"></div>
    <div class="col-md-4"><label>Roll No</label></div>
    <div class="col-md-6"><input type="text" name="rollno" class="form-control" value=<?php echo $data['rollno']; ?> required>
  </div></div>
                    

 <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-md-4"><label>full Name</label></div>
    <div class="col-md-6"> <input type="text" name="name" class="form-control"  value=<?php echo $data['name']; ?> required >
  </div></div>



 <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-md-4"><label>City</label></div>
    <div class="col-md-6"> <input type="text" name="city" class="form-control"  value=<?php echo $data['city']; ?> required >
  </div></div>



 <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-md-4"><label>Parente Contact No</label></div>
    <div class="col-md-6"> <input type="text" name="pcon" class="form-control" value=<?php echo $data['pcont']; ?> required >
  </div></div>



 <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-md-4"><label>Standerd</label></div>
    <div class="col-md-6"> <input type="number" name="std" class="form-control"  value=<?php echo $data['standerd']; ?> required >
  </div></div>



 <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-md-4"><label>Image</label></div>
    <div class="col-md-6">  <input type="file" name="simg" class="form-control"  required >
  </div></div>


  <div class="row" style="height: 80px;"><div class="col-sm-5"></div>
    <div class="col-sm-6">

<input type="hidden" name="sid" value=<?php echo $data['id']; ?>>

    	<button type="submit" name="submit" value="login" class="btn btn-success btn-block">Submit</button></div>
  </div>
 
  
</form>
</div></div>






 </body></html>