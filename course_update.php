<?php
	//get values from form
	$n  = $_REQUEST['c'];
	$id  = $_REQUEST['id'];
	

	include "config.php";

	//table with query

    $query="update course set course_name='$n' where id='$id'";
	//combine database with table
	$result = mysqli_query($con,$query);

	if($result>0)
	{
		echo "<script>window.location.assign('view_course.php?msg=Data Updated')</script>";
	}
	else{
		//echo "not inserted";
		echo mysqli_error($con);
		echo "<script>window.location.assign('view_course.php?msg=Data not Updated')</script>";

	}
?>
