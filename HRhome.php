<html>
    <head>
        <title>HR home</title>
        <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>
    <body>
        <?php
            session_start();
            if (!isset($_SESSION['user']))
            {
                header('Location: HRlogin.php'); //check extension
            }


            $connection=mysqli_connect('localhost','root','aressam1999');
            mysqli_select_db($connection,"bugtracker") or die("2");

            $query="SELECT * FROM empreg WHERE username='".$_SESSION["user"]."'";
            $result=mysqli_query($connection,$query) or die(mysqli_error);
        
            while($row=mysqli_fetch_array($result))
            {
            ?>
        <h1>User : <?=$row['name']?></h1>
        <table>
            <tr>
                <td><a href="changeusername2.php?id=<?=$row['eid']?>">Change username</a></td>
            </tr>
            <tr>
                <td><a href="changepassword2.php?id=<?=$row['eid']?>">Change password</a></td>
            </tr>
            <tr>
                <td><a href="viewmessage.php?id=<?=$row['eid']?>">View messages from employees</a></td>
            </tr>
            <tr>
                <td><a href="logout.php">Log out</a></td>
            </tr>
        </table>
        <?php
            }
        ?>
    </body>
</html>
