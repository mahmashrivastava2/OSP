<?php
$name=$_POST['name'];
$gen=$_POST['gen'];
$department=$_POST['department'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$status=$_POST['status'];
$dob=$_POST['dob'];
$hid=$_POST['hid'];
$connection=mysqli_connect('localhost','root','aressam1999');
mysqli_select_db($connection,"bugtracker") or die("2");
$q="UPDATE empreg SET name='".$name."', gen='".$gen."', dob='".$dob."', department=".$department.", email='".$email."', mobile='".$mobile."', status='".$status."' WHERE eid=".$hid;
mysqli_query($connection,$q) or die(mysqli_error);
header('Location: viewemp.php');
?>