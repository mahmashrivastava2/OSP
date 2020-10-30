<?php
        $id2 = intval($_GET['id2']);
        $connection=mysqli_connect('localhost','root','aressam1999');
        mysqli_select_db($connection,"bugtracker") or die("2");
        $q="SELECT * FROM empreg WHERE eid=".$id2;
        $result=mysqli_query($connection,$q) or die(mysqli_error);
        $q2="SELECT * FROM department";
        $result2=mysqli_query($connection,$q2) or die(mysqli_error);
        while($row=mysqli_fetch_array($result))
        {
?>
<html>
    <head>
        <title>Edit employee details</title>
        <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>    
    <body>
        
        <h1 align="center">Edit details : </h1>
        <form action="editempINS.php" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name=name value="<?=$row['name']?>"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name=gen value="m" checked>Male
                    <input type="radio" name=gen value="f">Female
                </td>
            </tr>
            <tr>
                <td>Birth Date</td>
                <td><input type="date" name=dob value="<?=$row['dob']?>"></td>
            </tr>       
            <tr>
                <td>Department</td>
                <td>

                    <select name=department>
                    <?php

            while($row2=mysqli_fetch_array($result2))
                    {
                        if($row['department'] == $row2['depid'])
                        {
                        ?>

                            <option value="<?=$row2['depid']?>" selected><?php echo $row2['depname'] ?></option>
                    <?php }

                        else
                        {
                            ?>

                            <option value="<?=$row2['depid']?>"><?php echo $row2['depname'] ?></option>
<?php
                        }
                } ?>
                    </select>

                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name=email value="<?=$row['email']?>"></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="text" name=mobile value="<?=$row['mobile']?>"></td>
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
                <td><input type="hidden" name=hid value="<?=$id2?>"><input type="submit" value="Submit"></td>
            </tr>    
            <tr>
                <td><a href="manageemployees.php">Back</a></td>
            </tr>
        </table>
<?php 
            }
mysqli_close($connection);
?>
        </form>
    </body>
</html>
