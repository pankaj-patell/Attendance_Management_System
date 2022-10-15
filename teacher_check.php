<?php 
   session_start();
   $e=$_REQUEST['e'];
   $p=$_REQUEST['p'];
   
   include "config.php";

   $q="SELECT * FROM `teacher`where email='$e' and password='$p' ";
       $r= mysqli_query($con,$q);

       if($row=mysqli_fetch_array($r))
       {
         $_SESSION['email']=$e;
         $_SESSION['name']=$row['name'];
         echo "<script>window.location.assign('index.php')</script>";

       }
       else{
        echo "not matched";
       }
?>