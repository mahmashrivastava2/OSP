
<?php
    $comment=$_POST['comment'];
    $active=$_POST['active'];
    $commentid=$_POST['commentid'];
    $rby=$_POST['rby'];

    echo $comment;
    echo "<br>";
    echo $active;
    echo "<br>";
    echo $commentid;
    echo "<br>";
    echo $rby;
    echo "<br>";
    $con=mysqli_connect("localhost","root","aressam1999");
    mysqli_select_db($con,"bugtracker");
    $q="UPDATE comments SET comment='".$comment."',active='".$active."' WHERE commentid=".$commentid;
    mysqli_query($con,$q);
    echo $q;
    header('Location: view.php?id='.$rby);
?>
