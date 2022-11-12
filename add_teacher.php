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
            <h1>Teacher</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Teacher</li>
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
              	<form method="post" action="teacher_insert.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Teacher Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter  Name" name="n">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter E-mail" name="e">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Password" name="p">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Address" name="a">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Course</label>
                    <select class="form-control" id="exampleInputEmail1" placeholder="Enter Course id" name="c">
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