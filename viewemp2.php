<?php
        $connection=mysqli_connect('localhost','root','aressam1999');
        mysqli_select_db($connection,"bugtracker") or die("2");
        $q="SELECT * FROM empreg WHERE status='n'";
        $result=mysqli_query($connection,$q) or die(mysqli_error);
    ?>
<html>
    <head>
        <title>Projects</title>
        <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>
    <body>
        <h1 align="center">De-commissioned employees : </h1>
    
    <table>
        <tr>
            <td>Name</td>
            <td>Gender</td>
            <td>Date of birth</td>
            <td>Department assigned to</td>
            <td>Mail id</td>
            <td>Mobile</td>
            <td>Status</td>
            <td></td>
        </tr>
        <?php
            while($row=mysqli_fetch_array($result))
            {
        ?>
        <tr>
            <td><?=$row['name']?></td>
            <td><?=$row['gen']?></td>
            <td><?=$row['dob']?></td>
            <td><?=$row['department']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['mobile']?></td>
            <td><?=$row['status']?></td>
            <td><a href="markemp.php?id=<?=$row['eid']?>">Re-commission</a></td>
        </tr>
        <?php
            }
            mysqli_close($connection);
        ?>
         <tr>
            <td><a href="manageemployees.php">Back</a></td>
        </tr>
    </table>
    </body>
</html>