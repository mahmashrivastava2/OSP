<?php


    $con=mysqli_connect('localhost','root','aressam1999');
    mysqli_select_db($con,"bugtracker") or die("2");
    $password=$_POST['pass'];
    $user=$_POST['user'];
    $hid=$_POST['hid'];

    $q="SELECT * FROM empreg WHERE password='".$password."' AND username='".$hid."'";
        $res=mysqli_query($con,$q) or die(mysqli_error);
        if(mysqli_num_rows($res))
        {
            session_start();
            $updateq="UPDATE empreg SET username='".$user."' WHERE username='".$hid."'";
            mysqli_query($con,$updateq) or die(mysqli_error);
            unset($_SESSION['user']);
            $_SESSION['user'] = $user;
            header('location: emphome.php');
            }
        else
        {
            header('location: changeusername.php?id='.$hid);
        }



  ?>
