<html>
    <head>
        <title>View employees</title>
        <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>
    <body>
        <h1 align="center">Commissioned employees : </h1>
    <?php
        $connection=mysqli_connect('localhost','root','aressam1999');
        mysqli_select_db($connection,"bugtracker") or die("2");
        $q="SELECT * FROM empreg,department WHERE department.depid=empreg.department AND empreg.status='y'";
        $result=mysqli_query($connection,$q) or die(mysqli_error);
        
    ?>
    <table>
        <tr>
            <td>Name</td>
            <td><br></td>
            <td>Gender</td>
            <td><br></td>
            <td>Date of birth</td>
           <td><br></td>
            <td>Department assigned to</td>
            <td><br></td>
            <td>Mail id</td>
            <td><br></td>
            <td>Mobile</td>
            <td><br></td>
            <td>Status</td>
            <td><br></td>
            
        </tr>
        <?php
            while($row=mysqli_fetch_array($result))
            {
        ?>
        <tr>
            <td><?=$row['name']?></td>
            <td><br></td>
	    <td><?=$row['gen']?></td>
            <td><br></td>
            <td><?=$row['dob']?></td>
            <td><br></td>
            <td><?=$row['depname']?></td>
            <td><br></td>
            <td><?=$row['email']?></td>
            <td><br></td>
            <td><?=$row['mobile']?></td>
            <td><br></td>
	    <td><?=$row['status']?></td>
            <td><br></td>
            <td><a href="editemp.php?id2=<?=$row['eid']?>">Edit</a></td>
            <td><br></td>
            <td><a href="mark2emp.php?id=<?=$row['eid']?>">de-commission</a></td>
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