<?php
        session_start();
        if (!isset($_SESSION["admin"]))
            {
                header('Location: adminlogin.php'); //check extension
            }

            ?>
<html>
    <head>
        <title>Admin home</title>
        <link href="csspage.css" rel="StyleSheet" type="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        
        <h1 align="center">Admin home </h1>
	<h1>Admin : <?php echo $_SESSION["admin"]; ?></h1>
        <table>
            <tr>
                <td>
                    <table class="table1">
                        <tr>
                            <td><a href="manageemployees.php">Manage employees</a></td>
                        </tr>
                        <tr>
                            <td><a href="department.php">Manage departments</a></td>
                        </tr>
                        <tr>
                            <td><a href="project.php">Manage projects</a></td>
                        </tr>
                        <tr>
                            <td><a href="viewreq.php">View requests</a></td>
                        </tr>
                        <tr>
                            <td><a href="techsupport.html">Tech support</a></td>
                        </tr>
                        <tr>
                            <td><a href="logout2.php">Log out</a></td>
                        </tr>
                    </table>
                </td>
                <td> Admin : <?php echo $_SESSION["admin"]; ?></td>
            </tr>
        </table>
    </body>
</html>