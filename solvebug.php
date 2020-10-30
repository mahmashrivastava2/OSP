<html>
    <head>
        <title>Solve the bug</title>
        <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>
    <body>
        <?php
            $id=intval($_GET['id']);
            $id2=intval($_GET['id2']);
            $con=mysqli_connect("localhost","root","aressam1999");
            mysqli_select_db($con,"bugtracker");
            $q="SELECT * FROM bugs WHERE bugid=".$id;
            $res=mysqli_query($con, $q);
            while($row=mysqli_fetch_array($res))
            {
        ?>
        <h1 align="center">Bug name :  </h1><h3 align="center"><?=$row['bug']?></h3>
    
    <form action="solvebugINS.php" method="post">
        <table class="table2">
            <tr>
                <td>Comment :</td>
                <td><textarea name="comment"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="hidden" value="<?=$row['assign']?>" name=rby>
                    <input type="hidden" value="<?=$row['bugid']?>" name=bugid><input type="submit" value="Submit"></td>
            </tr><tr><td><a href="emphome.php">Home</a></td>
            </tr>
        </table>
    </form>
        <?php
            }
        ?>
        <br>
        
    </body>
</html>
