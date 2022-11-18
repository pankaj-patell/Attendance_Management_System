<?php
include"config.php";
$c=$_REQUEST['c'];
$q="select * from `student` where course_id='$c'";
$r=mysqli_query($con,$q);
?>
<table class="table table-bordered">
<tr>
			<th>Roll No.</th>
			<th>Name</th>
			<th>Attendance</th>
			</tr>
			<?php while($arr=mysqli_fetch_array($r)) {?>
			<tr>
			<td><input class="form-control" type="text" name="roll[]" readonly placeholder="Roll no" style="border:none;" value="<?php echo $arr['roll_no'];?>"></td>
			<td><input class="form-control" type="text" name="name[]" readonly placeholder="Roll no" style="border:none;" value="<?php echo $arr['student_name'];?>"></td>
			<input class="form-control" type="hidden" name="id[]" readonly placeholder="Roll no" style="border:none;" value="<?php echo $arr['id'];?>">
			<td>
				<select name="a[]">
					<option>Present</option>
					<option>Absent</option>
				</select>
			</td>
			</tr>
			<?php }?>
			</table>