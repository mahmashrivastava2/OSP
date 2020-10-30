
<html>
    <head>
        <title>Projects</title>
            <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>
    <body>
        <h1 align="center">Projects : </h1>
    <?php
    $con=mysqli_connect('localhost','root','aressam1999');
    mysqli_select_db($con,"bugtracker");
        $q="SELECT * FROM project WHERE status='n'";
    $result=mysqli_query($con,$q);
    ?>
    <table class="table2">
        <?php
        while($row=mysqli_fetch_array($result))
        {
        ?>
        <tr>
            <td><?=$row['proname']?></td>
            <td><a href="markproject2.php?id2=<?=$row['pid']?>">Reopen project</a></td>
        </tr>
        <?php
        }
        ?>
        <tr>
            <td><a href="project.php">Back</a></td>
        </tr>
    </table>
    </body>
</html>