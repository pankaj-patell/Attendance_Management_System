<?php
session_start();
$tid=$_SESSION['id'];
$course=$_REQUEST['c'];
$subject=$_REQUEST['s'];
$name=$_REQUEST['name'];
$roll_no=$_REQUEST['roll'];
$a=$_REQUEST['a'];
$id=$_REQUEST['id'];
$date = date("m/d/Y");
include"config.php";
$count=count($name);
for($i=0;$i<$count;$i++)
{
$q="insert into`attendance`(`course_id`,`subject_id`,`student_id`,`roll_no`,`student_name`,`attendance`,`teacher_id`,`date`) values('$course','$subject','$id[$i]','$roll_no[$i]','$name[$i]','$a[$i]','$tid','$date')";
$result=mysqli_query($con,$q);
if($result>0)
{
	
	echo"<script>window.location.assign('add_attendance.php?msg=Data Saved')</script>";
}
else
{
	echo"<script>window.location.assign('add_attendance.php?msg=Data not Saved')</script>";

}
}
?>