<?php
$depname=$_POST['depname'];
$hid=$_POST['hid'];//check name.
$con=mysqli_connect('localhost','root','aressam1999');
mysqli_select_db($con,"bugtracker");
$q="UPDATE department SET depname='".$depname."' WHERE depid=".$hid;
echo $q;
    mysqli_query($con,$q) or die(mysqli_error);

echo "OK";
mysqli_close($con);
header('Location:viewdep.php');//check extension

?>


