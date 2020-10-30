<html>
    <head>
  
        <title>HR login</title>
        <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>
    <body>
        <h1 align="center">HR login</h1>
        <form action="HRloginINS.php" method="post">
            <table class="table2">
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name=user></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name=pass></td>
                </tr>
                <tr><td><input type="submit" value="Log-in"></td></tr>
            </table>
        </form>

            <?php /*   <br>
                <br>
                <?php
            if(request.getParameter("id1")!=null)
            {
                ?>
            
            <font color="red">
            Problem in updating password.<br>Please enter correct password.
            </font>           
            <%}
        %>
        */ ?>
    </body>
</html>
