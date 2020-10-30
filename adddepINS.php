
<?php
    $depname=$_POST['depname'];
    $con=mysqli_connect('localhost','root','aressam1999') or die(mysqli_error);
mysqli_select_db($con,"bugtracker") or die(mysqli_error);
    $q="INSERT INTO department(depname) VALUE('".$depname."')";
    mysqli_query($con,$q) or die(mysqli_error);
    header('Location: adddep.php');
?>

