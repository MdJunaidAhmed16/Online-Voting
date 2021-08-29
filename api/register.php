<?php
    $server="localhost";
    $username="root";
    $password="";
    $dbname="voting";
    $con=mysqli_connect($server,$username,$password,$dbname);
    if(!$con){
        die("Connection failed ".mysqli_connect_error());
    }


    $mobile=$_POST['mobile'];
    $pass=$_POST['pass'];
    // $cpass=$_POST['cpass'];
    $address=$_POST['address'];
    $name=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $role=$_POST['role'];
    $path="../uploads/images/";
    

    move_uploaded_file($tmp_name,$path.$name);
    $insert= "INSERT INTO user(mobile,pass,address,photo,role,status,votes) VALUES ('$mobile','$pass', '$address', '$name', '$role', 0, 0)";
    if ($con->query($insert) === TRUE) 
    {
        echo '
            <script>
                window.location="../index.html";
            </script>
        ';
    } 
    else 
    {
        echo "Error: " . $insert . "<br>" . $con->error;
    }   
    $con->close();
?>