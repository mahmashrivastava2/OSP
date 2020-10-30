<?php
    session_start();
    $id5=$_SESSION["user"];
        $id = intval($_GET['id']);
        $connection=mysqli_connect('localhost','root','aressam1999');
        mysqli_select_db($connection,"bugtracker") or die("2");
        $q="SELECT * FROM project WHERE status='y'";
        $result=mysqli_query($connection,$q) or die(mysqli_error);
        $q2="SELECT * FROM bugs WHERE bugid=".$id;
        $result2=mysqli_query($connection,$q2) or die(mysqli_error);
        $q3="SELECT * FROM empreg";
        $result3=mysqli_query($connection,$q3) or die(mysqli_error);
        while($row=mysqli_fetch_array($result2))
        {
?>
<html>
    <head>
        <title>Edit bug</title>
        <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>    
    <body>
        
        <h1 align="center">Edit details : </h1>
        <form action="editbugINS.php" method="post">
        <table>
            <tr>
                <td>Bug :</td>
                <td><input type="text" name=bug value="<?=$row['bug']?>"></td>
            </tr>  
            <tr>
                <td>Bug description:</td>
                <td><textarea name=bugdes><?=$row['bugdes']?></textarea>></td>
            </tr>   
            <tr>
                <td>Project :</td>
                <td>

                    <select name=project>
                    <?php

            while($row2=mysqli_fetch_array($result))
                    {
                        if($row['project'] == $row2['pid'])
                        {
                        ?>

                            <option value="<?=$row2['pid']?>" selected><?php echo $row2['proname'] ?></option>
                    <?php }

                        else
                        {
                            ?>

                            <option value="<?=$row2['pid']?>"><?php echo $row2['proname'] ?></option>
<?php
                        }
                } ?>
                    </select>

                </td>
            </tr>

           <tr>
                <td>Assign to :</td>
                <td>

                    <select name=assign>
                    <?php

            while($row3=mysqli_fetch_array($result3))
                    {
                        if($row['assign'] == $row3['eid'])
                        {
                        ?>

                            <option value="<?=$row3['eid']?>" selected><?php echo $row3['name'] ?></option>
                    <?php }

                        else
                        {
                            ?>

                            <option value="<?=$row3['eid']?>"><?php echo $row3['name'] ?></option>
<?php
                        }
                } ?>
                    </select>

                </td>
            </tr>
            <tr>
                <td><input type="hidden" name=hid value="<?=$id?>"><input type="submit" value="Submit"></td>
            </tr>    
            <tr>
                <td><a href="emphome.php">Back</a></td>
            </tr>
        </table>
<?php 
            }
mysqli_close($connection);
?>
        </form>
    </body>
</html>
