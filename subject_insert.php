<?php
	//get values from form
	$n = $_REQUEST['n'];
	$c = $_REQUEST['c'];
	$i = $_REQUEST['i'];
	

	//database
	//(hostname,username,password, db name)
	$con = mysqli_connect("localhost","root","","attendance_management_system");

	//table with query
	$query = "insert into `subject`(`subject_name`,`subject_code`,`course_id`)values('$n','$c','$i')";

	//combine database with table
	$result = mysqli_query($con,$query);

	if($result>0)
	{
		//echo "inserted";
		move_uploaded_file($ft,"upload/".$fn);
		header("location:add_subject.php");
	}
	else{
		//echo "not inserted";
		echo mysqli_error($con);
	}
?>