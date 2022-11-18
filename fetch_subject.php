<?php
	include"config.php";

	$c = $_REQUEST['c'];
	
	$q="select * from `subject` where course_id = '$c'";
	
	$result = mysqli_query($con,$q);
	
?>
<select class="form-control" required="" name="s" onchange="get_student(this.value)">
	<option selected disabled>Select Subject</option>
	<?php
		while($arr=mysqli_fetch_array($result)){
	?>
	<option value="<?php echo $arr['id']; ?>"><?php echo $arr['subject_name']; ?></option>
	<?php }?>
</select>