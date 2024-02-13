<html>
    <body>
    <?php
            $a=$_GET['t11'];
            $b=$_GET['t22'];
             $con=mysqli_connect('localhost','root','anubhav','signin');
             $q="select * from signin where email='$a' and password='$b'";
             $rs=mysqli_query($con,$q);
                if($row=mysqli_fetch_array($rs))
                {
                    echo"Login Successfully";
                }
                else
                {
                    echo"Error";
                }
    ?>
    </body>
</html>