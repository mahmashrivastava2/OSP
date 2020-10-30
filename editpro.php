<?php
        $id = intval($_GET['id']);
        $connection=mysqli_connect('localhost','root','aressam1999');
        mysqli_select_db($connection,"bugtracker") or die("2");
        $q="SELECT * FROM project WHERE pid=".$id;
        $result=mysqli_query($connection,$q) or die(mysqli_error);
        $q2="SELECT * FROM empreg";
        $result2=mysqli_query($connection,$q2) or die(mysqli_error);
        while($row=mysqli_fetch_array($result))
        {
?>
<html>
    <head>
        <title>Edit project details</title>
        <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>    
    <body>
        
        <h1 align="center">Edit details : </h1>
        <form action="editproINS.php" method="post">
        <table>
            <tr>
                <td>Project :</td>
                <td><input type="text" name=name value="<?=$row['proname']?>"></td>
            </tr>
            <tr>
                <td>Project description :</td>
                <td><textarea name=prodes><?=$row['prodes']?></textarea></td>
            </tr>
            <tr>
                <td>Client :</td>
                <td><input type="text" name=cname value="<?=$row['cname']?>"></td>
            </tr>
            <tr>
                <td>Client contact :</td>
                <td><input type="text" name=ccont value="<?=$row['ccont']?>"></td>
            </tr>      
            <tr>
                <td>Lead by</td>
                <td>

                    <select name=lead>
                    <?php

            while($row2=mysqli_fetch_array($result2))
                    {
                        if($row['lead'] == $row2['eid'])
                        {
                        ?>

                            <option value="<?=$row2['eid']?>" selected><?php echo $row2['name'] ?></option>
                    <?php }

                        else
                        {
                            ?>

                            <option value="<?=$row2['eid']?>"><?php echo $row2['name'] ?></option>
<?php
                        }
                } ?>
                    </select>

                </td>
            </tr> 
            <tr>
               <td>Is active?</td>
                    <td>
                        <input type="radio" value="y" name=status checked>YES
                        <input type="radio" value="n" name=status>NO                
                    </td>               
                </td>
            </tr>
            <tr>
                <td><input type="hidden" name=hid value="<?=$id?>"><input type="submit" value="Submit"></td>
            </tr>    
            <tr>
                <td><a href="viewproject.php">Back</a></td>
            </tr>
        </table>
<?php 
            }
mysqli_close($connection);
?>
        </form>
    </body>
</html>
