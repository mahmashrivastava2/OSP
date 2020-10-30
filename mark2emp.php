<?php
    $id = intval($_GET['id']);
    $connection=mysqli_connect('localhost','root','aressam1999');
    mysqli_select_db($connection,"bugtracker") or die("2");
    $q="UPDATE empreg SET status='n' WHERE eid=".$id;
    mysqli_query($connection,$q) or die(mysqli_error);
    mysqli_close($connection);
header('Location: viewemp.php');
    ?>