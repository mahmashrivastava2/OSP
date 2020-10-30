
<html>
    <head>

        <title>Edit department</title>
<link href="csspage.css" rel="StyleSheet" type="text/css"> 
    </head>
    <body>
        <h1 align="center">Edit department</h1>
        <?php
            $id = intval($_GET['id']);//get the name from the previous page.
            $con=mysqli_connect('localhost','root','aressam1999');
	        mysqli_select_db($con,"bugtracker") or die("2");
            $q="SELECT * FROM department WHERE depid=".$id;
            $res=mysqli_query($con,$q)or die(mysqli_error);
            while($row=mysqli_fetch_array($res))
            {
        ?>
        <form action="editdepINS.php" method="post">
            <table>
                <tr>
                    <td>Department name : </td>
                    <td>
                        <input type="text" name=depname value="<?=$row['depname']?>">
                    </td>
                </tr>
                <tr><td></td><td><input type="hidden" value="<?=$id?>" name=hid><input type="submit" value="Edit"></td></tr>
                <tr><td><a href="viewdep.php">Back</a></td></tr>
            </table>
        </form>
                <?php
            }
            mysqli_close($con);
            ?>
    </body>
</html>
