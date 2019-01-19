<?php
session_start();
if (isset($_SESSION['uid'])) {
  header('location:admin/admindash.php');
}
  ?>

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
</head><body  style="background: #061D4B;"> 
	

  <div class="jumbotron" style="text-align: center;  line-height: 100px;  ">

           <a href="index.php" style="text-decoration: none; color:white;">  <button class="btn btn-success" type="button"  style="float: left; margin-top: -20px; margin-left: 10px;">
Back</button></a>




   <h1>Welcome to student manegment of system</h1>
 </div>



<div class="col-sm-12" style="margin-top: 80px; background: url();" >
	    
    <div class="row">
      <div class="col-sm-4 "></div>
      <div class=" col-sm-4 " style="background: black; height: auto; color: white ; border-radius: 0px 0px 6% 6%; ">
        <div class="row">
        <div class="col-sm-12 panel-heading" style="text-align: center; bottom: 12px; background: blue; "><h2 style="line-height: 10px; " >Admin login</h2></div>
        </div>
        <form method="post" action="login.php">



          <div class="row" style="margin-top: 20px;">
            <div class="col-sm-1"></div>
    <div class="col-md-4"><label>Username</label></div>
    <div class="col-md-6"><input type="text" name="uname" class="form-control" placeholder="Enter your Username" required="Username">
  </div></div>
                    

 <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-md-4"><label>Password</label></div>
    <div class="col-md-6"> <input type="Password" name="pass" class="form-control"  placeholder="Enter your Password" required="Password" >

   
   
  </div></div>
  <div class="row" style="height: 80px;"><div class="col-sm-5"></div>
    <div class="col-sm-6"><button type="submit" name="login" value="login" class="btn btn-success btn-block">Submit</button></div>
  </div>
 
  
</form>
</div></div></div>
</body>
</html>

<?php
include'dbcon.php';
if (isset($_POST['login'])) {
	$username = $_POST['uname'];
	$password = $_POST['pass'];

	$qry="SELECT * FROM `admin` WHERE  `username`='$username'AND `password`='$password'";

	$run=mysqli_query($con,$qry);
	$row =mysqli_num_rows($run);
	if($row <1) {
?>
<script>
	alert('username or password not match !!');
	window.open('login.php','_self');
</script>
<?php
	} 
	else{
		$data=mysqli_fetch_assoc($run);
		$id=$data['id'];
		
  session_start();
		$_SESSION['uid']=$id;
		header('location:admin/admindash.php');
	}
}
?>