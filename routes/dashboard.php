<?php
   

?>
 <!-- session_start();
    if(!isset($_SESSION['userdata'])){
        header("location:../");
    } -->
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
    <a href="../index.html"><button class="back"><strong> Back </strong></button></a>
    <button class="logout"><strong>Logout </strong></button>
    
    <div  id="profile" style="height:240px;width:400px; background-color:aqua;border-radius:5%;padding:30px;box-shadow:10px 10px 10px 1px #555">
        <img src="../images/avatar.svg" alt="" height="100px" width="200px" style="position:relative;left:-55px;">
        <p><strong>Mobile: 9991232670</strong></p>
        <p><strong>Address: Vijayawada</strong></p>
        <p><strong>Status: Yet To Vote</strong></p>
    </div>

    <div  id="group" style="height:800px;width:500px;;position:relative;left:50em;bottom:26em;border-radius:10%">
        <h1>Groups</h1>
        <div class="groups" style="position:relative;top:20px;background-color:azure;padding:10px;margin:13px;border-radius:2%;box-shadow:8px 6px 8px 0px #555" >
            <p><strong>Group Name: Strikers</strong></p>
            <p><strong>Votes:</strong> 5</p>
            <a href="#"><button style="height:40px;width:60px;background-color:aqua;border:none;outline:none;border-radius:18%;font-size:20px;cursor:pointer;font-weight:bold">Voted</button></a>
        </div>
        <div class="groups" style="position:relative;top:20px;background-color:azure;padding:10px;margin:13px;border-radius:2%;box-shadow:8px 6px 8px 0px #555" >
            <p><strong>Group Name: Rangers</strong></p>
            <p><strong>Votes:</strong> 2</p>
            <a href="#"><button style="height:40px;width:60px;background-color:aqua;border:none;outline:none;border-radius:18%;font-size:20px;cursor:pointer;">Vote</button></a>
        </div>
        <div class="groups" style="position:relative;top:20px;background-color:azure;padding:10px;margin:13px;border-radius:2%;box-shadow:8px 6px 8px 0px #555" >
            <p><strong>Group Name: Smashers</strong></p>
            <p><strong>Votes:</strong> 1</p>
            <a href="#"><button style="height:40px;width:60px;background-color:aqua;border:none;outline:none;border-radius:18%;font-size:20px;cursor:pointer;">Vote</button></a>
        </div>
    </div>
    </div>
</body>
</html>