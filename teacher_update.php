<?php
	//get values from form
	$id  = $_REQUEST['id'];
	$n  = $_REQUEST['n'];
	$e  = $_REQUEST['e'];
	$p  = $_REQUEST['p'];
	$a  = $_REQUEST['a'];
	$c  = $_REQUEST['c'];
	

	include "config.php";

	//table with query

    $query="update teacher set Course='$c',name='$n',email='$e',password='$p',Address='$a' where id='$id'";
	//combine database with table
	$result = mysqli_query($con,$query);

	if($result>0)
	{
		echo "<script>window.location.assign('view_teacher.php?msg=Data Updated')</script>";
	}
	else{
		//echo "not inserted";
		echo mysqli_error($con);
		echo "<script>window.location.assign('view_teacher.php?msg=Data not Updated')</script>";

	}
?>
