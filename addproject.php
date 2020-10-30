<html>
    <head>
        <title>Create a project</title>
        <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>
    <body>
        <?php
            $con=mysqli_connect('localhost','root','aressam1999');
	    mysqli_select_db($con,"bugtracker");
     
            $q="SELECT * FROM empreg";
            $res=mysqli_query($con,$q);

            
        ?>
        <h1 align="center">Create project : </h1>
        <form action="addprojectINS.php" method="post">
            <table class="table2">
                <tr>
                    <td>Name of the project : </td>
                    <td><input type="text" name=proname></td>
                </tr>
                <tr>
                    <td>Project description : </td>
                    <td><textarea name=prodes></textarea></td>
                </tr>
                <tr>
                    <td>Client name : </td>
                    <td><input type="text" name=cname></td>
                </tr>
                <tr>
                    <td>Client contact number</td>
                    <td><input type="text" name=ccont></td>
                </tr>
                <tr>
                    <td>Lead by:</td>
                    <td>
                        
                        <select name=lead>
                            <option value="sel">sel</option>
                            <?php
                            while($row=mysqli_fetch_array($res))
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
                    <td>Is active?</td>
                    <td>
                        <input type="radio" name=status value="y" checked>YES
                        <input type="radio" name=status value="n">NO
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Assign"></td>
                </tr
                <tr>
                    <td><a href="project.php">Back</a></td>
                </tr>
            </table>
        </form>
    </body>
</html>
