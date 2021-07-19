<?php
        session_start();
        $server="localhost";
        $username="root";
        $password="";
        $dbname="voting";
        $con=mysqli_connect($server,$username,$password,$dbname);
        $mobile=($_POST['mobile']);
        $pass=($_POST['pass']);
        $role=($_POST['role']);


        $check="SELECT * FROM user WHERE mobile='$mobile' AND password='$pass' AND role='$role' ";
        if($result=mysqli_query($con,$check))
        {
            $row=mysqli_num_rows($result);
            printf("Result has %d rows.\n",$row);
            $userdata=mysqli_fetch_array($result);
            $groups=mysqli_query($con,"SELECT * FROM user WHERE role=2");
            $groupsdata=mysqli_fetch_all($groups, MYSQLI_ASSOC);

            $_SESSION['userdata']=$userdata;
            $_SESSION['groupsdata']=$groupsdata;

            echo '
                <script>
                    window.location=../routes/dashboard.php;
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
