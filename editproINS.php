<?php
            $proname=$_POST['name'];
            $prodes=$_POST['prodes'];
            $cname=$_POST['cname'];
            $ccont=$_POST['ccont'];
            $lead=$_POST['lead'];
            $hid=$_POST['hid'];
            $con=mysqli_connect('localhost','root','aressam1999');
	    mysqli_select_db($con,"bugtracker");
            $q="UPDATE project SET proname='".$proname."',prodes='".$prodes."',cname='".$cname."',ccont='".$ccont."',lead='".$lead."' WHERE pid='".$hid."'";
	    //check query
	    mysqli_query($con,$q);
	     echo $q;
         header('Location: viewproject.php');//check extension
?>