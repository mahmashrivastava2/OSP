<?php
    $regnum=$_POST['regnum'];
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $school=$_POST['school'];
    $cgpa=$_POST['cgpa'];
    
    $connection=mysqli_connect('localhost','root','aressam1999');
    mysqli_select_db($connection,"bugtracker") or die("2");
    //$q="INSERT INTO empreg(eid,name,gen,dob,department,email,mobile,status,username,password) VALUES(0,'".$name."','".$gen."','".$dob."', $department,'".$email."','".$mobile."','".$status."','".$email."','".$mobile."')";
    
    $q="INSERT INTO Student(regnum,name,dob,school,cgpa) VALUES('".$regnum."','".$name."','".$dob."'.'".$school."','".$cgpa."')";
echo "OK";
    
    mysqli_query($connection,$q) or die(mysqli_error);
    mysqli_close($connection);
   ?>
