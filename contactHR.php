<html>
    <head>

        <title>Contact HR</title>
        <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>
    <body>
        <?php
        session_start();
        $con=mysqli_connect('localhost','root','aressam1999');
        mysqli_select_db($con,"bugtracker") or die("2");
        $q="SELECT * FROM empreg WHERE department='5'";
        $obj3=mysqli_query($con,$q) or die(mysqli_error);
        $id=intval($_GET['id']);
        ?>
        <h1 align="center">Contact HR : </h1>
        <form action="contactHRINS.php" method="post">
            <table class="table2">
                    <td>Select an HR authority :</td>
                    <td>

                        <select name=auth>
                            <option value="sel">sel</option>
                            <?php
                            while($row=mysqli_fetch_array($obj3))
                            {
                        ?>
                            <option value="<?=$row['eid']?>"><?=$row['name']?></option>
                        <?php
                            }
                        ?>
                        </select>

                    </td>
                </tr>
                <tr>
                    <td>Your query/complaint :</td>
                    <td>
                        <textarea name=query></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="hidden" value="<?=$id?>" name=hid><input type="submit" value="Go"></td>
                </tr>
                <tr>
                    <td><a href="emphome.php">Back</a></td>
                </tr>
            </table>
        </form>
    </body>
</html>
