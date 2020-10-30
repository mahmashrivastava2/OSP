<?php
$id2 = intval($_GET['id2']);
$con=mysqli_connect('localhost','root','aressam1999');
mysqli_select_db($con,"bugtracker");            
$q="UPDATE project SET status='n' WHERE pid=".$id2;
mysqli_query($con,$q);
header('Location: viewproject.php');//check extension
?>
