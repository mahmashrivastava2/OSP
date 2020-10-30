<?php
opcache_reset();
$admin=$_POST['admin'];
$pass=$_POST['pass'];

$connection=mysqli_connect('localhost','root','aressam1999');
mysqli_select_db($connection,"bugtracker");
$query="SELECT * FROM admin WHERE admin='".$admin."' AND password='".$pass."'";
$result=mysqli_query($connection,$query) or die(mysqli_error);
echo $query;

if(mysqli_num_rows($result) )
{
echo "OK2";
session_start();
$_SESSION["admin"]=$admin;
mysqli_close($connection);
header('Location: adminhome.php'); //check extension
echo $_SESSION["admin"];
}
else
{
echo "OK3";
mysqli_close($connection);
header('Location: adminlogin.php');//check extension  ?id1=1
}

?>
