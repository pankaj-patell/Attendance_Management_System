<?php 
       include "header.php";
       include "sidebar.php";
       ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Student</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="add_teacher.php">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Student's Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Sr.NO.</th>
                    <th>Student Name</th>
                    <th>Email-id</th>
                    <th>Password</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>course id</th>
                    <th>Roll no.</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
<?php
  $i=1;
  include "config.php";
  $query="select * from `student`";
  $res=mysqli_query($con,$query);
  while($data=mysqli_fetch_array($res)){
?>
<tr>
  <td><?php echo $i; ?></td>
  <td><?php echo $data['student_name']; ?></td>
  <td><?php echo $data['email']; ?></td>
  <td><?php echo $data['password']; ?></td>
  <td><?php echo $data['contact']; ?></td>
  <td><?php echo $data['address']; ?></td>
  <td><?php echo $data['course_id']; ?></td>
  <td><?php echo $data['roll_no']; ?></td>
  <td><a class="btn btn-primary" href="edit_student.php?id=<?php echo $data['id']; ?>">Edit</a></td>
  <td><a class="btn btn-danger
  "  href="delete_student.php?id=<?php echo $data['id']; ?>">Delete</a></td>
</tr>
<?php 
  $i++;
  }
?>

</tbody>  
                  
</table>
                  </div>
                  </div>
                </div>
             </div>
     </div>


<?php include "footer.php";
    ?>