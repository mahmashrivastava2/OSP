
<?php
    session_start();
    $des=$_POST['des'];
    $id=$_POST['hid'];
    $project=$_POST['project'];
    $rby=$_POST['hid'];
    $con=mysqli_connect('localhost','root','aressam1999');
    mysqli_select_db($con,"bugtracker") or die("2");
    $q="INSERT INTO request Values(0,'".$rby."','".$des."','".$project."','Project request','n')";
    mysqli_query($con,$q) or die(mysqli_error);
    header('Location:request.php?id='.$id);
?>
