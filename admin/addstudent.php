<?php

 include('../dbcon.php');
if (isset($_POST['submit'])) {
  
  $rollno= $_POST['rollno'];
  $name= $_POST['name'];
  $city= $_POST['city'];
  $pcon= $_POST['pcon'];
  $std= $_POST['std'];
  $imagename=$_FILES['simg']['name'];
  $tempname = $_FILES['simg']['tmp_name'];  

  move_uploaded_file($tempname,"../dataimg/$imagename");

  $qry="INSERT INTO student(rollno, name, city, pcont, standerd, image) VALUES ('".$rollno."','".$name."','".$city."','".$pcon."','".$std."','".$imagename."') ";

$run=mysqli_query($con,$qry);
if ($run) {
 
 echo "<script> alert('Data Add Successfully.');</script>";
}
else{
  //echo "<script>alert('not');</script>";
  echo mysqli_error($con);
}
}
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
           <a href="admindash.php" style="text-decoration: none; color:white;">  <button class="btn btn-success" type="button"  style="float: left; margin-top: -20px; margin-left: 10px;">Back</button></a>

          <a href="../logout.php" style="text-decoration: none; color:white;">
          <button class="btn btn-success" type="button"  style="float: right; margin-top: -20px; margin-right: 10px;">Logout</button></a>

          <h1>Welcome to student manegment of system</h1>
 </div>

<div class="col-sm-12" style="margin-top: 80px; background: url();" >
	    
      <div class="col-sm-4"></div>



 
      <div class=" col-sm-4 " style="background: black; height: auto; color: white ; border-radius: 0px 0px 6% 6%; ">
        <div class="row">
        <div class="col-sm-12 panel-heading" style="text-align: center; bottom: 12px; background: blue; "><h2 style="line-height: 10px; " >Addusers</h2></div>
        </div>
        <form method="post" action="addstudent.php" enctype="multipart/form-data">



          <div class="row" style="margin-top: 20px;">
            <div class="col-sm-1"></div>
    <div class="col-md-4"><label>Roll No</label></div>
    <div class="col-md-6"><input type="text" name="rollno" class="form-control" placeholder="Enter your Roll No" required="">
  </div></div>
                    

 <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-md-4"><label>full Name</label></div>
    <div class="col-md-6"> <input type="text" name="name" class="form-control"  placeholder="Enter Your Full Name" required="" >
  </div></div>



 <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-md-4"><label>City</label></div>
    <div class="col-md-6"> <input type="text" name="city" class="form-control"  placeholder="Enter City" required="Password" >
  </div></div>



 <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-md-4"><label>Parente Contact No</label></div>
    <div class="col-md-6"> <input type="text" name="pcon" class="form-control"  placeholder="Enter the Contact of Parente" required="" >
  </div></div>



 <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-md-4"><label>Standerd</label></div>
    <div class="col-md-6"> <input type="number" name="std" class="form-control"  placeholder="Enter Standerd" required="" >
  </div></div>



 <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-md-4"><label>Image</label></div>
    <div class="col-md-6"> <input type="file" name="simg" class="form-control"  required="" >
  </div></div>


  <div class="row" style="height: 80px;"><div class="col-sm-5"></div>
    <div class="col-sm-6"><button type="submit" name="submit" value="login" class="btn btn-success btn-block">Submit</button></div>
  </div>
 
  
</form>
</div></div>
</body>
</html>

<?php


?>

