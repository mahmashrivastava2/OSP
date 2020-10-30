<html>
    <head>
        <title>Comments</title>
        <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>
    <body>
    <?php
        $id = intval($_GET['id']); //Get value from previous page
        $con = mysqli_connect("localhost","root","aressam1999");
        mysqli_select_db($con,"bugtracker");
        $q="SELECT * FROM comments WHERE rby=".$id." AND active='y'";
        $res = mysqli_query($con,$q);
    ?>
        <h3 align="center">Comments : </h3>
    <br>
    <br>
    <table>
        <tr>
            <td> Sr. no </td>
            <td> Comment : </td>
            <td> Bug: </td>
        </tr>
        <tr><td><br></td></tr>
        <?php 
        $i=1;
        while($row = mysqli_fetch_array($res))
        {
        ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$row['comment']?></td>

        <?php
        $i=$i+1;

        $q2="SELECT * FROM bugs WHERE bugid=".$row['bugid'];
        $res2=mysqli_query($con,$q2);
        while($row2 = mysqli_fetch_array($res2)){
        ?>
        <td><?=$row2['bug']?></td>
        <td><a href="editcomment.php?id=<?=$row['commentid']?>"> Edit</a></td>
        </tr>
        <?php
    }}
    ?>
        <tr>
            <td><a href="emphome.php">Back</a></td>
        </tr>
    </table>

    </body>
</html>
