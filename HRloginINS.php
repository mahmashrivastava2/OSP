<?php
    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $connection=mysqli_connect('localhost','root','aressam1999');
    mysqli_select_db($connection,"bugtracker") or die("2");

    $query="SELECT * FROM empreg WHERE username='".$user."' AND password='".$pass."' AND department=5";
    echo $query;
    $result=mysqli_query($connection,$query) or die(mysqli_error);


    if(mysqli_num_rows($result) > 0 )
    {
        session_start();
        $_SESSION["user"]=$user;
        header('Location: HRhome.php'); //check extension
    }
    else
    {
        header('Location: HRlogin.php');//check extension  ?id1=1
    }

?>
