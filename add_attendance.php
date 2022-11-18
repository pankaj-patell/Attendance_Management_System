<?php 
     include "header.php";
     include "teacher_sidebar.php";
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student Attendance</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Attendance</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <div class="row mt-5">
        <div class="col-md-12">
        <?php
              if(isset($_REQUEST['msg']))
              {
                echo "<div class='alert alert-info text-center'>".$_REQUEST['msg']."</div>";
              }
            ?> 
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Mark Attendance</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              	<form method="post" action="attendance_insert.php" enctype="multipart/form-data">
                <div class="card-body" id="student">
                  
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              
            </div>
            <!-- /.card -->
          <!-- left column -->
          <div class="offset-md-3 col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Enter Detail</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              	<div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Course</label>
                    <select class="form-control" onchange="get_subject(this.value)" id="c" name="c">
                      <option disabled selected>Select Course</option>
                      <?php
                          include "config.php";
                          $q=mysqli_query($con,"select * from `course`");
                          while($data=mysqli_fetch_array($q)){
                      ?>
                      <option value="<?php echo $data['id'];?>"><?php echo $data['course_name'];?></option>
                      <?php }?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Subject</label>
                    <select class="form-control" onchange="get_student(this.value)" id="s" name="s">
                      <option disabled selected>Select Subject</option>
                     
                    </select>
                      
                   </div>
                
                </div>
                <!-- /.card-body -->

                <!---div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div-->
                </form>
            </div>
            <!-- /.card -->
        </div>
      </div>
    </section>
 <?php 
      include "footer.php";
 ?>