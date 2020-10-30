<html>
    <head>
        <link href="csspage.css" rel="StyleSheet" type="text/css">
        <title>Comments</title>

    </head>
    <body>
    <?php
        $id = intval($_GET['id']); //Get name from the previous
        $rby = $_GET['id2']; //Get name from the previous
        $con = mysqli_connect("localhost","root","aressam1999");
        mysqli_select_db($con, "bugtracker");
        $q="SELECT * FROM comments WHERE bugid=".$id;
        $res = mysqli_query($con, $q);

        $q2="SELECT * FROM bugs WHERE bugid=".$id;
        $res2=mysqli_query($con, $q2);

        $q3="SELECT * FROM empreg WHERE username='".$rby."'";
        $res3=mysqli_query($con, $q3);

        $i=1;
        while($r=mysqli_fetch_array($res) and $r1=mysqli_fetch_array($res2)){}
        while($row = mysqli_fetch_array($res2)) //Possible error, try $res
        {

    ?>
        <h1 align="center">Bug :<?=$row['bug']?></h1>
       <?php
   }
   ?>
        <br>
        <h3 align="center">Comments : </h3>
    <br>
    <br>
    <table>
        <tr>
            <td>Sr. no</td>
            <td>Comment :</td>
            <td>By : </td>
        </tr>
        <tr><td><br></td></tr>
        <?php
        while($row2 = mysqli_fetch_array($res))
        {
        ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$row2['comment']?></td>

        <?php
        $i=$i+1;

        
        while($row3 = mysqli_fetch_array($res3)){
        ?>
        <td><?php echo $row3['name']    ?></td>
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
