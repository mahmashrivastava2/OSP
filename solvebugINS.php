
<?php
    $comment=$_POST['comment'];
    $rby=$_POST['rby'];
    $bugid = $_POST['bugid'];
    $con=mysqli_connect("localhost","root","aressam1999");
    mysqli_select_db($con,"bugtracker");
    $q="INSERT INTO comments(commentid,bugid,comment,rby,active) VALUE(0,'".$bugid."','".$comment."','".$rby."','y')";
    mysqli_query($con, $q);

    $q2="SELECT * FROM bugs WHERE bugid='".$bugid."'"; //Check datatype of $bugid
    $res = mysqli_query($con, $q2);
    if(mysqli_num_rows($res) > 0){
    header('Location: emphome.php');
    }
    echo "OK";
?>