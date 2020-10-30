<?php
$id=intval($_GET['id']);
?>
<html>
    <head>
        <title>Change password</title>

        <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>
    <body>
        <form action="changepassword2INS.php" method="post" >
            <table class="table2">
                <tr>
                    <td>Enter old password</td>
                    <td><input type="password" name=password></td>
                </tr>
                <tr>
                    <td>Enter new password</td>
                    <td><input type="password" name=p1></td>
                </tr>
                <tr>
                    <td>Confirm new password</td>
                    <td><input type="password" name=p2></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="hidden" value="<?=$id?>" name="hid"><input type="submit" value="change"></td>
                </tr>
                <tr><td> <a href="HRhome.php">Back</a></td></tr>
            </table>
        </form>

                <br>
                <br>
                <?php
            if($id2!=null)
            {
                ?>

            <font color="red">
            Problem in updating password.<br>Please enter correct password.
            </font>
            <?php
        }
        ?>
    </body>
</html>
