<?php
	//get values from form
	$id  = $_REQUEST['id'];
	

	include "config.php";

	//table with query
	$query = "delete from `teacher` where id='$id'";

	//combine database with table
	$result = mysqli_query($con,$query);

	if($result>0)
	{
		echo "<script>window.location.assign('view_teacher.php?msg=Data Deleted')</script>";
	}
	else{
		//echo "not inserted";
		echo mysqli_error($con);
		echo "<script>window.location.assign('view_teacher.php?msg=Data not Deleted')</script>";

	}
?>
