<?php session_start();?>
<html>
<head>
<title>
    Manage Products
</title>
</head>
<style>
 body{
background-color:black;
color:white;
 }
    .lnkbtn{
        border-style:solid;
        border-color:#85DCBA;
        display:block;
        margin-top:15px;
        background-color:#85DCBA;
        padding:10px;
        color:black;
        border-radius:5px;
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
    @media only screen and (max-width: 767px) 
    {
        body {
          background-size:cover;
          background-position:50% 100%;
        }

    }
    </style>
<?php
require_once("extfiles.php");
?>
<body >

<!-- Admin Navigation Bar -->
<?php
require_once("adminnavbar.php");
?>

<!-- Manage Products -->
<br><br><br><br>
<div class="container lead"align="center">
    <h1 class="display-4"align="center">Manage Products & Categories</h1>
    <br>Admin can Manage All the Products & Categories From Here : <br><br>

    <a href="catmng.php"class="lnkbtn">View/Manage Categories</a>
    <a href="subcatmang.php"class="lnkbtn">View/Manage Sub-Categories</a>
    <a href="viewproducts.php"class="lnkbtn">Manage Products</a>
    <a href="manageproducts.php"class="lnkbtn">Add Products</a>

    
</div>



<br><br><br><br>
<!-- Footer -->
<?php
require_once("footer.php");
?>
</body>
</html>
