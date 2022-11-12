<?php
	//get values from form
	$i  = $_REQUEST['i'];
	$n  = $_REQUEST['n'];
	$c  = $_REQUEST['c'];
	$id  = $_REQUEST['id'];
	

	include "config.php";

	//table with query

    $query="update subject set course_id='$i',subject_name='$n',subject_code='$c' where id='$id'";
	//combine database with table
	$result = mysqli_query($con,$query);

	if($result>0)
	{
		echo "<script>window.location.assign('view_subject.php?msg=Data Updated')</script>";
	}
	else{
		//echo "not inserted";
		echo mysqli_error($con);
		echo "<script>window.location.assign('view_subject.php?msg=Data not Updated')</script>";

	}
?>
