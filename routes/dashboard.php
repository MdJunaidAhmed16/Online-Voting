<?php
session_start();
if (!isset($_SESSION['userdata'])) {
    header("location:../");
}
$userdata = $_SESSION['userdata'];
$groupsdata = $_SESSION['groupsdata'];

if($_SESSION['userdata']['status']==0)
{
    $status='<strong style="color:black;border:4px solid red;padding:3px;border-radius:3%;">Not Yet Voted</strong>';
}
else{
    $status='<strong style="color:black;border:4px solid green;padding:3px;border-radius:3%;">Voted</strong>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Document</title>
</head>

<body>
    
    <div class="mainsection">
        
        <h1>Cast Your Vote </h1>
        <h1 style="position:relative">Groups</h1>
        
        <div id="profile" style="height:340px;width:400px; background-color:aqua;border-radius:5%;padding:30px;box-shadow:10px 10px 10px 1px #555;position:relative;left:50px">
            
            <img src="../uploads/images/<?php echo $userdata['photo'] ?>" alt="" height="200px" width="200px" style="position:relative;left:15px;border-radius:10%">
            <p><strong>Mobile: <?php echo $userdata['mobile'] ?></strong></p>
            <p><strong>Address: <?php echo $userdata['address'] ?></strong></p>
            <p><strong>Status: <?php echo $status;?></strong></p>
        </div>


        <div id="group" >
            
            
            <?php
            if ($_SESSION['groupsdata'])
            {       

                for ($i = 0; $i <count($groupsdata); $i++) 
                {
                    ?>
                    <div class="groups" style="width:350px;height:250px; padding:20px; margin:2rem;background-color:azure;position:relative;bottom:23rem;left:42rem;border-radius:3%;box-shadow:8px 6px 8px 0px #555">
                    <img src="../uploads/images/<?php echo $groupsdata[$i]['photo'] ?>" height="100" width="100">
                    <p><strong>Group Name: <?php echo $groupsdata[$i]['mobile'] ;?></strong></p>
                    <p><strong>Votes:<?php echo $groupsdata[$i]['votes'] ;?></strong></p>
                    <form action="../api/vote.php" method="POST">
                        <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes']?>">
                        <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id']?>">
                        <?php 
                            if($_SESSION['userdata']['status']==0)
                            {
                                ?>
                                <p><a href="#"><button style="height:40px;width:90px;background-color:aqua;border:none;outline:none;border-radius:18%;font-size:20px;cursor:pointer;font-weight:bold">Vote</button></a></p>
                                <?php
                            }
                            else{
                                ?>
                                <p><a href="#"><button disabled style="height:40px;width:90px;background-color:aqua;border:none;outline:none;border-radius:18%;font-size:20px;cursor:pointer;font-weight:bold">Vote</button></a></p>
                                <?php
                            }
                            ?>
                        
                    </form>
                    
            
                    </div>
                    <?php
                }
        
            } 
            else {
                echo "No group data";
            }
            ?>

        </div>
    </div>
</body>

</html>