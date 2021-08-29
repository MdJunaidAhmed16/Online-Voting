<?php

session_start();
$server="localhost";
$username="root";
$password="";
$dbname="voting";
$con=mysqli_connect($server,$username,$password,$dbname);

$votes=$_POST['gvotes'];
$total=$votes+1;
$gid=$_POST['gid'];
$uid=$_SESSION['userdata']['id'];

$update_votes =mysqli_query($con,"UPDATE user SET votes='$total' WHERE id='$gid' ");
$update_votes_status=mysqli_query($con,"UPDATE user SET status=1 WHERE id='$uid' ");
if($update_votes and $update_votes_status)
{
    $groups=mysqli_query($con,"SELECT * FROM user WHERE role=2 ");
    $groupsdata=mysqli_fetch_all($groups,MYSQLI_ASSOC);

    $_SESSION['userdata']['status']=1;
    $_SESSION['groupsdata']=$groupsdata;
    echo '
    <script>
        alert("Voted");
    </script>
    ';
    
}
else{
    echo '
    <script>
        alert("Error Occured");
    </script>
    
    ';
}

?>