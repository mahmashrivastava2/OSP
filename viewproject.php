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
        $q="SELECT * FROM project WHERE status='y'";
	$result=mysqli_query($con,$q);
    ?>
    <table class="table2">
        <?php
        while($row=mysqli_fetch_array($result))
        {
        ?>
        <tr>
            <td><?=$row['proname']?></td>
            <td><a href="editpro.php?id=<?=$row['pid']?>">Edit</a></td>
            <td><a href="markprojects.php?id2=<?=$row['pid']?>">Mark as done</a></td>
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