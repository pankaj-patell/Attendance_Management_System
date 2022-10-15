<?php
	//get values from form
	$id  = $_REQUEST['id'];
	

	include "config.php";

	//table with query
	$query = "delete from `student` where id='$id'";

	//combine database with table
	$result = mysqli_query($con,$query);

	if($result>0)
	{
		echo "<script>window.location.assign('view_student.php')</script>";
	}
	else{
		//echo "not inserted";
		echo mysqli_error($con);
	}
?>
