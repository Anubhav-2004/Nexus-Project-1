<html>
    <body>
    <?php
            $a=$_GET['t33'];
            $b=$_GET['t44'];
            $c=$_GET['t11'];
            $d=$_GET['t22'];
            $con=mysqli_connect('localhost','root','anubhav','signin'); // corrected database name
            $q="insert into signin values('$a','$b','$c','$d')";
            $rs=mysqli_query($con,$q);
            if($rs)
            {
                Session_start();
                echo"Register Successfully";
            }
            else 
            {
                echo"Error";
            }
    ?>
    </body>
</html>
