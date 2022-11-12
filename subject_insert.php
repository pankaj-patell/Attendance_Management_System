<?php
	//get values from form
	$n = $_REQUEST['n'];
	$c = $_REQUEST['c'];
	$i = $_REQUEST['i'];
	

	//database
	//(hostname,username,password, db name)
	
	include "config.php";

	//table with query
	$query = "insert into `subject`(`subject_name`,`subject_code`,`course_id`)values('$n','$c','$i')";

	//combine database with table
	$result = mysqli_query($con,$query);

	if($result>0)
	{
		//echo "inserted";
		move_uploaded_file($ft,"upload/".$fn);
		echo "<script>window.location.assign('add_subject.php?msg=Data Inserted')</script>";
	}
	else{
		//echo "not inserted";
		echo mysqli_error($con);
		echo "<script>window.location.assign('add_subject.php?msg=Data not Inserted')</script>";

	}
?>