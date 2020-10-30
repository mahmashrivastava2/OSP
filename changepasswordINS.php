        <?php

            $connection=mysqli_connect('localhost','root','aressam1999');
            mysqli_select_db($connection,"bugtracker") or die("2");
            $pass=$_POST['p1'];
            $pass2=$_POST['p2'];
            $hid=$_POST['hid'];
            $password=$_POST['password'];
            
            $query="SELECT * FROM empreg WHERE password='".$password."' AND username='".$hid."'";
            $result=mysqli_query($connection,$query) or die(mysqli_error);
            echo $query;

           // if($pass contains $pass2)
//{         

            if(mysqli_num_rows($result))
            {
               
                $queryupdate="UPDATE empreg SET password='".$pass."' WHERE username='".$hid."'";
                
                mysqli_query($connection,$queryupdate) or die(mysqli_error);   
                echo "ok1";             
                header('Location: emphome.php');
                
            }
            else
            { 
                echo"OK2";
                header('Location: changepassword.php?id=$hid'); //  ?id2=2                                   ALSO CHECK EXTENSION
            
            }  
        //}
       /* else
        {
            echo "Passwords doesnt match";
             ?>
            <a href="changepassword.php?id=<?=$hid?>">Retry</a>
            <?php
        }
   */ 
        ?>