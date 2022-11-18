<?php 
     include "header.php";
     include "student_sidebar.php";
?>
<?php
  $i=1;
  include "config.php";
  $id=$_SESSION['id'];
  $query="select student.*,course.course_name from `student`
  INNER JOIN `course`
  ON student.course_id=course.id
   where student.id = '$id'";
  $res=mysqli_query($con,$query);
  $data=mysqli_fetch_array($res);
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="offset-md-3 col-md-5">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-square rounded-circle"
                       src="image/ak.jpg.jpg?>"
                       alt="User profile picture">
                </div>
                <div class="row">
               <div class="col-md-6"><p class="text-right mt-1">Name:</p></div>  <div class="col-md-6"><p class="text-left mt-1"><?php echo $data['student_name']; ?></p></div>
            
               <div class="col-md-6"><p class="text-right mt-1">Roll Number:</p></div> <div class="col-md-6"> <p class="text-left mt-1"><?php echo $data['roll_no']; ?></p></div>
</div>
       </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Course: </strong>

                <td><?php echo $data['course_name']; ?></td>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location:</strong>

                <td><?php echo $data['address']; ?></td>

                <hr>
                <strong><i class="fa fa-phone mr-1"></i> Contact:</strong>

              <td><?php echo $data['contact']; ?></td>
              
                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> E-mail:</strong>
                <td><?php echo $data['email']; ?></td>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
</section>         
          <?php 
      include "footer.php";
 ?>
          