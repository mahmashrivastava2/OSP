
<html>
    <head>
        <title>Request a project</title>


        <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>
    <body>
        <?php
        session_start();    
        $id=intval($_GET['id']);
        $con=mysqli_connect('localhost','root','aressam1999');
        mysqli_select_db($con,"bugtracker") or die("2");
            $q="SELECT * FROM project WHERE status='y'";
            $obj3=mysqli_query($con,$q) or die(mysqli_error);
        ?>
        <h1 align="center">Request a project</h1>
        <form  action="requestjobINS.php" method="post">
            <table class="table2">
                <tr>
                    <td>Specify your query : </td>
                    <td><textarea name=des></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="hidden" value="<?=$id?>" name=hid><input type="submit" value="Request"></td>
                </tr>
                <tr>
                    <td><a href="emphome.php">Back</a></td>
                </tr>
            </table>
        </form>
    </body>
</html>
