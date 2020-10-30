<html>
    <head>
        <title>Bugs i reported</title>
       <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>
    <body/>
        <?php
            $id = intval($_GET['id']);
            $con = mysqli_connect("localhost","root","aressam1999");
            mysqli_select_db($con,"bugtracker");
            $q="SELECT * FROM bugs WHERE assign=".$id; //Check datatype of $id
            $res=mysqli_query($con, $q);

        ?>
        <h1 align="center">Bugs that were reported to you</h1>
        <table class="table2">
            <tr>
                <td>Bug title</td>
                <td>Bug description</td>
                <td>Solve</td>
            </tr>
            <tr><td><br></td></tr>
            <?php
            while($row = mysqli_fetch_array($res))
            {
            ?>
            <tr>
                <td><?=$row['bug']?></td>
                <td><?=$row['bugdes']?></td>
                <td><a href="solvebug.php?id=<?=$row['bugid']?>&id2=<?=$row['assign']?>">Solve</a></td>

            </tr>
            <?php
                        }
            ?>
            <tr>
                <td><a href="emphome.php">Back</a></td>
            </tr>
        </table>
    </body>
</html>
