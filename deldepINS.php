
<?php
	$id = intval($_GET['id']);
	echo $id;
    $con=mysqli_connect('localhost','root','aressam1999');
	mysqli_select_db($con,"bugtracker") or die(mysqli_error);
    $q="DELETE FROM department WHERE depid=".$id;
    mysqli_query($con,$q) or die(mysqli_error);
    header('Location:deldep.php');
?>
