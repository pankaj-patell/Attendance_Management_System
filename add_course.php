<?php 
     include "header.php";
     include "admin_sidebar.php";
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Course</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Course</li>
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
          <!-- left column -->
          <div class="offset-md-3 col-md-6">
            <?php
              if(isset($_REQUEST['msg']))
              {
                echo "<div class='alert alert-info text-center'>".$_REQUEST['msg']."</div>";
              }
            ?>  
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Enter Detail</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              	<form method="post" action="course_insert.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Course Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter course name" name="c">
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