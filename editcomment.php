<html>
    <head>
        <title>Report a bug</title>
        <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>
    <body>
        <h1 align="center">Edit this comment : </h1>
        <?php
            $id = intval($_GET['id']); //Get name from previous page
            $con=mysqli_connect("localhost","root","aressam1999");
            mysqli_select_db($con,"bugtracker");
            $q="SELECT * FROM comments WHERE commentid=".$id;
            $res=mysqli_query($con,$q);
            
            
            // code not going in while loop

            while($row = mysqli_fetch_array($res))
            {
        ?>
        <form action="editcommentINS.php" method="post">
            <table class="table2">
                <tr>
                    <td>Do you want to revoke this comment?</td>
                    <td> <input type="radio" name=active value="n">Yes<br>
                         <input type="radio" name=active value="y" checked>No
                    </td>
                </tr>
                <tr><td><br></td>
                    <td><br></td></tr>
                <tr>
                    <td>Comment : </td>
                    <td><textarea name=comment><?=$row['comment']?></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="hidden" name=rby value="<?=$row['rby']?>">
                        <input type="hidden" name=commentid value="<?=$row['commentid']?>">
                        <input type="submit" value="Change"></td>
                </tr>
                <tr>
                    <td><a href="view.php?id=<?=$row['rby']?>">Back</a></td>
                    <td></td>
                </tr>
            </table>
        </form>
    <?php
}
?>
    </body>
</html>
