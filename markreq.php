<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Mark projects</title>
    </head>
    <body>
        <?php
        session_start();
        $id=intval($_GET['id']);
        $con=mysqli_connect('localhost','root','aressam1999');
        mysqli_select_db($con,"bugtracker") or die("2");
        $q="UPDATE request SET status='y' WHERE reqid=".$id;
        mysqli_query($con,$q) or die(mysqli_error);
        header('Location:viewreq.php');
        
            ?>
    </body>
</html>
