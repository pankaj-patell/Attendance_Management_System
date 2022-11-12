<?php
	//get values from form
	$n = $_REQUEST['n'];
	$e = $_REQUEST['e'];
	$p = $_REQUEST['p'];
    $c = $_REQUEST['c'];
	$a = $_REQUEST['a'];
	$i = $_REQUEST['i'];
	$r = $_REQUEST['r'];

	

	//database
	//(hostname,username,password, db name)
	include "config.php";

	//table with query
	$query = "insert into `student`(`student_name`,`email`,`password`,`contact`,`address`,`course_id`,`roll_no`)values('$n','$e','$p','$c','$a','$i','$r')";

	//combine database with table
	$result = mysqli_query($con,$query);

	if($result>0)
	{
		//echo "inserted";
		//move_uploaded_file($ft,"upload/".$fn);
		echo "<script>window.location.assign('add_student.php?msg=Data Inserted')</script>";
	}
	else{
		//echo "not inserted";
		echo mysqli_error($con);
		echo "<script>window.location.assign('add_student.php?msg=Data not Inserted')</script>";

	}
?>