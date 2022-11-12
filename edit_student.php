<?php 
     include "header.php";
     include "admin_sidebar.php";
?>
<?php
  $id=$_REQUEST['id'];
  include "config.php";
  $query="select * from `student` where id='$id'";
  $res=mysqli_query($con,$query);
  $data=mysqli_fetch_array($res);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student</li>
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
              	<form method="post" action="student_update.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Student Name</label>
                    <input type="hidden" class="form-control" value="<?php echo $data['id'];?>" id="exampleInputEmail1" placeholder="Enter course name" name="id">
                    <input type="text" class="form-control"value="<?php echo $data['student_name'];?>" id="exampleInputEmail1" placeholder="Enter Student name" name="n">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="text" class="form-control"value="<?php echo $data['email'];?>" id="exampleInputEmail1" placeholder="Enter E-mail" name="e">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" class="form-control"value="<?php echo $data['password'];?>" id="exampleInputEmail1" placeholder="Password" name="p">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Contact</label>
                    <input type="text" class="form-control" value="<?php echo $data['contact'];?>" id="exampleInputEmail1" placeholder="Contact" name="c">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"value="<?php echo $data['address'];?>" placeholder="Address" name="a">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Course </label>
                    <select class="form-control" id="exampleInputEmail1" placeholder="Enter Course id" name="i">
                    <?php
                          include "config.php";
                          $q1=mysqli_query($con,"select * from `course`");
                          while($data1=mysqli_fetch_array($q1)){
                            if($data1["course_id"]==$data["id"])
								{
									echo "<option value='$data1[id]' selected=''>".$data1["course_name"]."</option>";
								}
								else{
									echo "<option value='$data1[id]'>".$data1["course_name"]."</option>";
								}
                         }?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Roll no.</label>
                    <input type="text" class="form-control" value="<?php echo $data['roll_no'];?>" id="exampleInputEmail1" placeholder="Roll no." name="r">
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