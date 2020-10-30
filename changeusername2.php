<?php
$id=intval($_GET['id']);
?>
<html>
    <head>

        <title>Change username</title>
        <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>
    <body>
        <form action="changeusername2INS.php" method="post" >
            <table class="table2">
                <tr>
                    <td>Enter new username :</td>
                    <td><input type="text" name=user></td>
                </tr>
                <tr>
                    <td>Enter password :</td>
                    <td><input type="password" name=pass></td>
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
            Please enter the correct credentials.
            </font>
            <?php
        }
        ?>
    </body>
</html>
