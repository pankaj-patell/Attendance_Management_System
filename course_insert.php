<?php
	//get values from form
	$n  = $_REQUEST['c'];
	

	$con = mysqli_connect("localhost","root","","attendance_management_system");

	//table with query
	$query = "insert into `course`(`course_name`)values('$n')";

	//combine database with table
	$result = mysqli_query($con,$query);

	if($result>0)
	{
		//echo "inserted";
		move_uploaded_file($ft,"upload/".$fn);
		header("location:course.php");
	}
	else{
		//echo "not inserted";
		echo mysqli_error($con);
	}
?>
