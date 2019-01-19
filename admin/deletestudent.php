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
 

<style type="text/css">


</style>
</head><body> 
	

  <div class="jumbotron" style="text-align: center;  line-height: 100px;  ">

           <a href="admindash.php" style="text-decoration: none; color:white;">  <button class="btn btn-success" type="button"  style="float: left; margin-top: -20px; margin-left: 10px;">
Back</button></a>


<a href="..//logout.php" style="text-decoration: none; color:white;">
   <button class="btn btn-success" type="button"  style="float: right; margin-top: -20px; margin-right: 10px;">
Logout</button></a>

   <h1>Welcome to student manegment of system</h1>
 </div>


<div class="col-sm-12">
<div class="row">
	<div class="col-sm-2"></div>
		<div class="col-sm-8">
			
			
			<form method="post" action="deletestudent.php">

				<div class="row">
<div class="col-sm-2" style="margin-top: 7px; ">
	<label > Enter Standard</label>
</div>



<div class="col-sm-3" style="margin-top: 7px;">
	<input type="number" name="standerd" class="form-control">
</div>



<div class="col-sm-2" style="margin-top: 7px;">
	<label>Enter Student</label>
</div>



<div class="col-sm-3" style="margin-top: 7px;">
	<input type="text" name="stuname"  class="form-control" >
</div>


 
<div class="col-sm-2" style="margin-top: 7px;">
	<button name="submit"  class="form-control btn-success"  >submit</button>
</div></div>
</form></div>
		</div>

	<div class="col-sm-2"></div>

</div>

   <div class="col-sm-12" style=" margin-top: 50px; ">
   

   
   	 <table class="table">
    <thead style="border: 4px solid black; font-size: px; ">
      <tr style="background-color: black; color: white;">
        <th style="border: 2px solid white;text-align: center;">No</th>
        <th  style="border: 2px solid white;text-align: center;">Name</th>
        <th  style="border: 2px solid white;text-align: center;">Rollno</th>
        <th  style="border: 2px solid white;text-align: center;">City</th>
        
        <th  style="border: 2px solid white;text-align: center;">Images</th>
        
        <th  style="border: 2px solid white;text-align: center;">Delete</th>
      </tr>


<?php


if (isset($_POST['submit'])) {
	include ('../dbcon.php');

$standerd = $_POST['standerd'];
$name = $_POST['stuname'];

$sql="SELECT * FROM `student` WHERE `standerd`='$standerd' AND `name` LIKE '%$name%'";
$run=mysqli_query($con,$sql);
if (mysqli_num_rows($run)<1)
  {
	echo"<tr><td colspan='5'>No Recorde Found</td></th>";
}
else{

	$count=0;
	while($data=mysqli_fetch_assoc($run))
	{	
		$count++;
		?>
		      <tr align="center">
        <td style="border: 2px solid black; 
        line-height: 70px;"><?php echo $count; ?></td>
          <td  style="border: 2px solid black; line-height: 70px;"><?php echo $data['name'];?></td>
        <td  style="border: 2px solid black; line-height: 70px;"><?php echo $data['rollno']; ?></td>
        <td  style="border: 2px solid black; line-height: 70px;"><?php echo $data['city']; ?></td>
        <td  style="border: 2px solid black;"><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width: 50px;"></td>
      
        <td  style="border: 2px solid black;  "><a href="deleteform.php?sid=<?php echo $data['id']; ?>"   style="text-decoration: none;" ><button class="btn-primary" style="margin-top: 17px; height: 40px;  border-radius: 12%;"> Delete </button> </a></td>
      </tr>

		<?php	 
	}
}
}

?>



    </thead>

</table></div>

   
 </body></html>