<?php

function showdetails($standerd,$rollno)
{
	include ('dbcon.php');
	$sql="SELECT * FROM student WHERE rollno ='$rollno' AND standerd='$standerd'";


	$run=mysqli_query($con,$sql);

	if (mysqli_num_rows($run)>0) {
		$data=mysqli_fetch_assoc($run);
		?>

<div class="col-sm-12" style="margin-top: 100px; background-color: black;">
	<div class="col-sm-3"></div>
	<div class="col-sm-6" style="margin-top: 50px;">
   	 <table class="table" style=" text-align: center;" >
    <thead style="border: 4px solid white; margin-top: 100px; font-size: px; bottom: 220px;  color: white;">
      <tr style="background-color: black; color: white;"><th colspan="3" style="text-align: center;">Student Infomation</th></tr>
      <tr>

        <td style="border: 2px solid white; " rowspan="6" colspan="" ><img src="dataimg/<?php echo $data['image']; ?>" style="max-width: 120px;  max-height: 150px; margin: 10PX;"></td></tr>
        <tr>
        <th style="border: 2px solid white;text-align: center;" >Name</th>      <td  style="border: 2px solid white; "><?php echo $data['name'];?></td></tr>
        <tr>
        <th  style="border: 2px solid white;text-align: center;">Rollno</th>   <td  style="border: 2px solid white; "><?php echo $data['rollno']; ?></td></tr>

  <tr>
        <th  style="border: 2px solid white;text-align: center;">Parents Contact No</th>   <td  style="border: 2px solid white; "><?php echo $data['pcont']; ?></td></tr>
   
     <tr>
        <th  style="border: 2px solid white;text-align: center;">City</th>   <td  style="border: 2px solid white; "><?php echo $data['city']; ?></td></tr>
   
     <tr>
        <th  style="border: 2px solid white;text-align: center;">standerd</th>   <td  style="border: 2px solid white; "><?php echo $data['standerd']; ?></td></tr>
   


   
</thead></table>
</div>
</div>

		<?php

	}
	else{
		echo "<script>alert('No Student Found.');</script>";



}
}
		?>