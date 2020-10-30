<html>
    <head>
        <title>Contact HR</title>
        <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>
    <body>
    <?php
        $con=mysqli_connect('localhost','root','aressam1999');
        mysqli_select_db($con,"bugtracker") or die("2");
        $id=intval($_GET['id']);
        $q="SELECT * FROM request WHERE pid='".$id."' AND domain='HR query'";
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
            <td><?=$i?></td>
            <td><?=$row['rby']?></td>
            <td><?=$row['des']?></td>
            <td><?=$row['domain']?></td>
            <?php 
        $i=$i+1;
        }
        ?>
        <tr>
            <td><br></td>
        </tr>
         <tr>
            <td><a href="HRhome.php">Back</a></td>
        </tr>

    </table>

    </body>
</html>
