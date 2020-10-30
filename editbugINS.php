<?php
    session_start();
    $project=$_POST['project'];
    $bug=$_POST['bug'];
    $bugdes=$_POST['bugdes'];
    $assign=$_POST['assign'];
    $rby=$_SESSION["user"];
    $hid=$_POST['hid'];
    $active='y';

    $connection=mysqli_connect('localhost','root','aressam1999');
    mysqli_select_db($connection,"bugtracker") or die("2");


    $q="UPDATE bugs SET active='".$active."',project='".$project."',bug='".$bug."',bugdes='".$bugdes."',assign='".$assign."',rby='".$rby."' WHERE bugid=".$hid;
    mysqli_query($connection,$q) or die(mysqli_error);
    header('Location: ownbug.php?id='.$rby);

?>