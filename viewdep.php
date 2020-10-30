<html>
    <head>
        
        <title>Departments</title>
<link href="csspage.css" rel="StyleSheet" type="text/css">//

    </head>
    <body>
        <h1 align="center">Departments : </h1>
    <?php
        $con=mysqli_connect('localhost','root','aressam1999');
	mysqli_select_db($con,"bugtracker") or die("2");
        $q="SELECT * FROM department";
	$res=mysqli_query($con,$q);
    ?>
    <table>
        <?php
        while($row=mysqli_fetch_array($res))
        {
        ?>
        <tr>
            <td><?=$row['depname']?></td>
            <td><a href="editdep.php?id=<?=$row['depid']?>">Edit</a></td>
        </tr>
        <?php
        }
        mysqli_close($con);
        ?>
        <tr>
            <td><a href="department.php">Back</a></td>
        </tr>
    </table>
    </body>
</html>