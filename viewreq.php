<html>
    <head>

        <title>Requests</title>
        <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>
    <body>
    <?php
    $con=mysqli_connect('localhost','root','aressam1999');
    mysqli_select_db($con,"bugtracker") or die("2");
    $q="SELECT * FROM request WHERE status='n' AND domain!='HR query'";
    $obj3=mysqli_query($con,$q) or die(mysqli_error);
    ?>
        <h3 align="center">Requests : </h3>
    <br>
    <br>
    <table class="table2">
        <tr>
            <td> Sr. no </td>
            <td> User name : </td>
            <td> Request: </td>
            <td> Domain: </td>
        </tr>
        <tr><td><br></td></tr>
        <?php
        $i=1;
        while($row=mysqli_fetch_array($obj3))
        {
        ?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$row['rby']?></td>
            <td><?=$row['des']?></td>
            <td><?=$row['domain']?></td>
            <td><a href="markreq.php?id=<?=$row['reqid']?>">Mark as read</a></td>
            <?php
        }
        ?>
        <tr>
            <td><br></td>
        </tr>
    </table>
        <br><br>
        <h3 align="center">Read requests : </h3>
    <br>
    <br>
        <table class="table2">
        <tr>
            <td> Sr. no </td>
            <td> User name : </td>
            <td> Request: </td>
            <td> Domain: </td>
        </tr>
        <tr><td><br></td></tr>
        <?php
        $q2="SELECT * FROM request WHERE status='y'";
        $obj5=mysqli_query($con,$q2) or die(mysqli_error);
        $i2=1;
        while($row=mysqli_fetch_array($obj5))
        {
        ?>
        <tr>
            <td><?=$i2++?></td>
            <td><?=$row['rby']?></td>
            <td><?=$row['des']?></td>
            <td><?=$row['domain']?></td>
            <?php
        }
        ?>
        <tr>
            <td><a href="adminhome.php">Back</a></td>
        </tr>
    </table>

    </body>
</html>
