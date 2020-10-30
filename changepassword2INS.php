<?php
session_start();
$con=mysqli_connect('localhost','root','aressam1999');
mysqli_select_db($con,"bugtracker") or die("2")
    $pass=$_POST['p1'];
    $pass2=$_POST['p2'];
    $hid=$_SESSION["user"];
    $password=$_POST['password'];
    $id=$_POST['hid'];
    $q="SELECT * FROM empreg WHERE password='".$password."' AND username='".$hid."'";
      $obj3=mysqli_query($con,$q) or die(mysqli_error);
        if($row=mysqli_fetch_array($obj3))
        {

            $updateq="UPDATE empreg SET password='".$pass."' WHERE username='".$hid."'";

            mysqli_query($con,$updateq) or die(mysqli_error);
            header('Location: HRhome.php');

            }
        else
        {
            header('Location:changepassword2.php?id2='.$id);
        }



?>
