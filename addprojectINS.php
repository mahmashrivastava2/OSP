<?php
      $proname=$_POST['proname'];
      $prodes=$_POST['prodes'];
      $cname=$_POST['cname'];
      $ccont=$_POST['ccont'];
      $lead=$_POST['lead'];
      $status=$_POST['status'];
      $con=mysqli_connect('localhost','root','aressam1999');
      mysqli_select_db($con,"bugtracker");
	$q="INSERT INTO project(pid,proname,prodes,cname,ccont,lead,status) VALUE(0,'".$proname."','".$prodes."','".$cname."','".$ccont."','".$lead."','".$status."')";
      mysqli_query($con,$q);
      header('Location: addproject.php');//check extension

?>