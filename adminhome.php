<?php session_start();?>
<html>
<head>
<title>
    Admin Home
</title>
<?php
require_once("extfiles.php");
?>
<style>
    body{
        background-color:white;
        color:black;
    }
    .lnkbtn{
        
        border-style:solid;
        border-color:#85DCBA;
        border-radius:5px;
        margin-top:15px;
        background-color:#85DCBA;
        padding:10px;
        color:black;
        display:block;
        width:20%;
    }
    .lnkbtn:hover{
        background-color:#41B3A3;
        border-color:#41B3A3;
        color:black;
        border-radius:5px;
        text-decoration:none;
        transition:0.4s ease;
    }
    #acc:hover{
        color:white;
        text-shadow: 0 0 2px white;
    }
    @media (max-width:940px)
    {
    .lnkbtn{
        width:50%;
    }

    }
</style>
</head>
<body>
<?php
require_once("adminnavbar.php")
?>


<!-- Functions of Admin -->

<br><br><br><br>
<div class="container lead"align="center">
    <h1 class="display-4"align="center">Welcome Administrator</h1>
    <br>Admin can Manage All the Website From Here : <br><br>
    <a href="orders.php"class="lnkbtn">View Orders</a><br>
    <a href="membman.php"class="lnkbtn">Manage/View Members</a><br>
    <a href="searchuser.php"class="lnkbtn">Search User</a><br>
    <a href="#"class="lnkbtn">Add/Remove Admin</a><br>

</div>




<br><br><br><br>
<br><br><br><br>
<?php 
require_once("footer.php")
?>
</body>
</html>