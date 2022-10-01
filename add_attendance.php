<?php 
     include "header.php";
     include "sidebar.php";
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
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Enter Detail</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              	<form method="post" action="attendance_insert.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">course id</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="course id" name="i">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">student id</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="student id" name="s">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">student name </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="student name" name="n">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">attendance</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="attendance" name="a">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">teacher id</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="teacher id" name="t">
                  </div>
                 

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
 <?php 
      include "footer.php";
 ?>