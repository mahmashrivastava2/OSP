<!DOCTYPE html>

<?php
  $id=$_GET['id'];
?>
<html>
    <head>
        <title>Change password</title>

        <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>
    <body>
        <form action="changeusernameINS.php" method="post" >
            <table class="table2">
                <tr>
                    <td>Enter new username :</td>
                    <td><input type="text" name=user value="<?=$id?>"></td>
                </tr>
                <tr>
                    <td>Enter password :</td>
                    <td><input type="password" name=pass></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="hidden" value="<?=$id?>" name="hid"><input type="submit" value="change"></td>
                </tr>
                <tr><td> <a href="emphome.php">Back</a></td></tr>
            </table>
        </form>

                <br>
                <br>
                <?php
                /*
            if(intval($_GET['id2']);!=null)
            {
                ?>

            <font color="red">
            Please enter the correct credentials.
            </font>
            <?php}
        
      */  ?>
    </body>
</html>
