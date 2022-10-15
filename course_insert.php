<?php
	//get values from form
	$n  = $_REQUEST['c'];
	

	include "config.php";

	//table with query
	$query = "insert into `course`(`course_name`)values('$n')";

	//combine database with table
	$result = mysqli_query($con,$query);

	if($result>0)
	{
		//echo "inserted";
		move_uploaded_file($ft,"upload/".$fn);
		echo "<script>window.location.assign('course.php')</script>";
	}
	else{
		//echo "not inserted";
		echo mysqli_error($con);
	}
?>
