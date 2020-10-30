<html>
    <head>
        <title>Employee home</title>
        <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>
    <body>
        <?php
            session_start();
            $id=intval($_GET['id']);
            $con=mysqli_connect('localhost','root','aressam1999');
            mysqli_select_db($con,"bugtracker") or die("2");
            $q="SELECT * FROM empreg WHERE eid=".$id;
            $res=mysqli_query($con,$q) or die(mysqli_error);
            while($row=mysqli_fetch_array($res))
            {
            ?>
        <h1>User : <?=$row['name']?></h1><br>
        <table class="table1">
            <tr>
                <td><a href="requestproject.php?id=<?=$row['eid']?>">Request projects from admin</a></td>
            </tr>
            <tr>
                <td><a href="requestjob.php?id=<?=$row['eid']?>">Request regarding job</a></td>
            </tr>
            <tr>
                <td><a href="contactHR.php?id=<?=$row['eid']?>">Contact HR</a></td>
            </tr>
            <tr>
                <td><a href="emphome.php">Back</a></td>
            </tr>
        </table>
        <?php
            }
        ?>
    </body>
</html>
