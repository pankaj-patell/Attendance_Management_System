<?php 
       include "header.php";
       include "student_sidebar.php";
       ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Attendance</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="add_teacher.php">Home</a></li>
              <li class="breadcrumb-item active">Attendance</li>
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
          <?php
              if(isset($_REQUEST['msg']))
              {
                echo "<div class='alert alert-info text-center'>".$_REQUEST['msg']."</div>";
              }
            ?> 
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Attendance</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Sr.no</th>
                    <th>Course</th>
                    <th>Subject</th>
                    <th>Name</th>
                    <th>Roll No.</th>
                    <th>Attendance</th>
                    <th>Added By</th>
                    <th>Date</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  
                  <?php
                    $i=1;
                    $id=$_SESSION['id'];
                    include "config.php";
                    $query="select attendance.*,course.course_name,subject.subject_name,teacher.name from `attendance`
                    INNER JOIN course
                    ON attendance.course_id=course.id
                    INNER JOIN subject
                    ON attendance.subject_id=subject.id
                    INNER JOIN teacher
                    ON attendance.teacher_id=teacher.id
                    where attendance.student_id='$id'
                    order by attendance.id desc";
                    $res=mysqli_query($con,$query);
                    while($data=mysqli_fetch_array($res)){
                    ?>
                    <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $data['course_name']; ?></td>
                    <td><?php echo $data['subject_name']; ?></td>
                    <td><?php echo $data['student_name']; ?></td>
                    <td><?php echo $data['roll_no']; ?></td>
                    <td><?php echo $data['attendance']; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['date']; ?></td>
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