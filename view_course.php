<?php 
       include "header.php";
       include "admin_sidebar.php";
       ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Courses</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Courses</a></li>
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
          <?php
              if(isset($_REQUEST['msg']))
              {
                echo "<div class='alert alert-info text-center'>".$_REQUEST['msg']."</div>";
              }
            ?> 
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Entered Course</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
<thead>
<tr>
  <th>Sr.no</th>
  <th>Course Name</th>
  <th>Edit</th>
  <th>Delete</th>
</tr>
</thead>
<tbody>
<?php
  $i=1;
  include "config.php";
  $query="select * from `course`";
  $res=mysqli_query($con,$query);
  while($data=mysqli_fetch_array($res)){
?>
<tr>
  <td><?php echo $i; ?></td>
  <td><?php echo $data['course_name']; ?></td>
  <td><a class="btn btn-primary" href="edit_course.php?id=<?php echo $data['course_name']; ?>">Edit</a></td>
  <td><a class="btn btn-danger
  "  href="delete_course.php?id=<?php echo $data['id']; ?>">Delete</a></td>
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