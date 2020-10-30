<?php
    session_start();
    $rby=$_SESSION["user"];
    $des=$_POST['des'];
    $project="Job related ";
    $id=$_POST['hid'];
    $con=mysqli_connect('localhost','root','aressam1999');
    mysqli_select_db($con,"bugtracker") or die("2");
    $q="INSERT INTO request(reqid,rby,des,pid,domain,status) Values(0,'".$rby."','".$des."',0,'Job query','n')";
    mysqli_query($con,$q) or die(mysqli_error);
    header('Location:request.php?id='.$id);
?>
