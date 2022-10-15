<?php 
   session_start();
   $e=$_REQUEST['e'];
   $p=$_REQUEST['p'];
   $t=$_REQUEST['t'];
   
   include "config.php";
  if($t=='Admin')
  {
    $q="SELECT * FROM `Admin`where email='$e' and password='$p' ";
    $r= mysqli_query($con,$q);

    if($row=mysqli_fetch_array($r))
    {
      $_SESSION['email']=$e;
      $_SESSION['name']=$row['name'];
      echo "<script>window.location.assign('admin_index.php')</script>";

    }
    else{
     echo "not matched";
    }
  }
  else if($t=='Teacher')
  {
    $q="SELECT * FROM `Teacher`where email='$e' and password='$p' ";
    $r= mysqli_query($con,$q);

    if($row=mysqli_fetch_array($r))
    {
      $_SESSION['email']=$e;
      $_SESSION['name']=$row['name'];
      echo "<script>window.location.assign('teacher_index.php')</script>";

    }
    else{
     echo "not matched";
    }
  }
  else if($t=='Student')
  {
    $q="SELECT * FROM `Student`where email='$e' and password='$p' ";
    $r= mysqli_query($con,$q);

    if($row=mysqli_fetch_array($r))
    {
      $_SESSION['email']=$e;
      $_SESSION['name']=$row['name'];
      echo "<script>window.location.assign('student_index.php')</script>";

    }
    else{
     echo "not matched";
    }
  }
   ?>