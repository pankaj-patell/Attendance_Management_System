<?php 
   session_start();
   $e=$_REQUEST['e'];
   $p=$_REQUEST['p'];
   
   $con = mysqli_connect("localhost","root","","Attendance_Management_System");

   $q="SELECT * FROM `teacher`where email='$e' and password='$p' ";
       $r= mysqli_query($con,$q);

       if($row=mysqli_fetch_array($r))
       {
         $_SESSION['email']=$e;
         $_SESSION['name']=$row['name'];
              header('location:index.php');

       }
       else{
        echo "not matched";
       }
?>