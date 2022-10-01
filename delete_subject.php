<?php
	//get values from form
	$id  = $_REQUEST['id'];
	

	include "config.php";

	//table with query
	$query = "delete from `subject` where id='$id'";

	//combine database with table
	$result = mysqli_query($con,$query);

	if($result>0)
	{
		header("location:view_subject.php");
	}
	else{
		//echo "not inserted";
		echo mysqli_error($con);
	}
?>