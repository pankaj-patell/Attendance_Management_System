<?php
	//get values from form
	$i = $_REQUEST['i'];
	$s = $_REQUEST['s'];
	$n = $_REQUEST['n'];
    $a = $_REQUEST['a'];
	$t = $_REQUEST['t'];

	

	//database
	//(hostname,username,password, db name)
	$con = mysqli_connect("localhost","root","","attendance_management_system");

	//table with query
	$query = "insert into `attendance`(`course_id`,`student_id`,`student_name`,`attendance`,`teacher_id`)values('$i','$s','$n','$a','$t')";

	//combine database with table
	$result = mysqli_query($con,$query);

	if($result>0)
	{
		//echo "inserted";
		move_uploaded_file($ft,"upload/".$fn);
		header("location:add_attendance.php");
	}
	else{
		//echo "not inserted";
		echo mysqli_error($con);
	}
?>