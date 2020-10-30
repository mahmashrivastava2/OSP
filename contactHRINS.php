<?php
session_start();
    $des=$_POST['query'];
    $auth=$_POST['auth'];
    $id=$_POST['hid'];
    $rby=$_SESSION["user"];
    $con=mysqli_connect('localhost','root','aressam1999');
    mysqli_select_db($con,"bugtracker") or die("2");
    $q="INSERT INTO request(reqid,rby,des,pid,domain,status) Values(0,'".$rby."','".$des."',".$auth.",'HR query','n')";
    mysqli_query($con,$q) or die(mysqli_error);
    header('Location:request.php?id='.$id);
?>
