<?php
    $server="localhost";
    $username="root";
    $password="";
    $dbname="voting";
    $con=mysqli_connect($server,$username,$password,$dbname);
    if(!$con){
        die("Connection failed ".mysqli_connect_error());
    }


    $mobile=($_POST['mobile']);
    $pass=($_POST['pass']);
    // $cpass=$_POST['cpass'];
    $address=($_POST['address']);
    $photo=($_FILES['photo']['mobile']);
    $tmp_name=($_FILES['photo']['tmp_name']);
    $role=($_POST['role']);
    

    move_uploaded_file($tmp_name,"../uploads/$photo");
    $insert= "INSERT INTO voting.user(`mobile`, `pass`, `address`, `photo`, `role`, `status`, `votes`) VALUES ('$mobile','$pass', '$address', '$photo', '$role', 0, 0)";
    if ($con->query($insert) === TRUE) 
    {
        echo "New record created successfully";
    } 
    else 
    {
        echo "Error: " . $insert . "<br>" . $con->error;
    }   
    $con->close();
?>