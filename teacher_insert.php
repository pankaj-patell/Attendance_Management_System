<?php
	//get values from form
	$n = $_REQUEST['n'];
	$e = $_REQUEST['e'];
	$p = $_REQUEST['p'];
    $c = $_REQUEST['c'];
	$a = $_REQUEST['a'];

	

	//database
	//(hostname,username,password, db name)
	include "config.php";

	//table with query
	$query = "insert into `teacher`(`name`,`email`,`password`,`course`,`Address`)values('$n','$e','$p','$c','$a')";

	//combine database with table
	$result = mysqli_query($con,$query);

	if($result>0)
	{
		//echo "inserted";
		move_uploaded_file($ft,"upload/".$fn);
		echo "<script>window.location.assign('add_teacher.php')</script>";
	}
	else{
		//echo "not inserted";
		echo mysqli_error($con);
	}
?>