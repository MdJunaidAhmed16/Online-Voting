<?php
        session_start();
        
        $server="localhost";
        $username="root";
        $password="";
        $dbname="voting";
        $con=mysqli_connect($server,$username,$password,$dbname);
        $mobile=$_POST['mobile'];
        $pass=$_POST['pass'];
        $role=$_POST['role'];


        $check="SELECT * from user where mobile='$mobile' and pass='$pass'";
        $result=$con->query($check);
        $no=mysqli_num_rows($result);

        if($no!=0)
        {
            $userdata=mysqli_fetch_array($result);
            $groups=mysqli_query($con,"SELECT * FROM user WHERE role=2 ");
            $groupsdata=mysqli_fetch_all($groups,MYSQLI_ASSOC);

            $_SESSION['userdata']=$userdata;
            $_SESSION['groupsdata']=$groupsdata;

            echo '
                <script>
                    window.location="../routes/dashboard.php";
                </script>
            ';
        }
        
        else{
            echo'
                <script>
                    alert("Invalid Credentials");
                    window.location="../routes/register.html";
                </script>
            ';
        }
?>
