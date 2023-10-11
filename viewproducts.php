<?php session_start();
if(!isset($_SESSION["pname"]))
{
    header("location:login.php");       //check for login
}
if($_SESSION["usertype"]!=="admin"){
    header("location:login.php");           //admin pages security
   }



?>
<html>
<head>
    <title>
        View Products
    </title>
    </head>
    <?php
    include_once("extfiles.php");
    ?>
    <style>
        .col-sm:hover{
            color:black;
            background-color:white;
        }
        .prodlinks{
            text-decoration:none;
            color:black;
        }
        .prodlinks:hover{
            text-decoration:none;
            color:black;
        }
        </style>
</head>
<?php
    include_once("adminnavbar.php");
    ?>
<body>
<br><br><br><br>

<div class="container"syle="margin-top:100px;">
<h1 class="display-4"align="center">Products Added By Admin</h1></div>
<br><br><br><br>
<div class="container">
<div class="row">
        
    
        <?php
        require_once("vars.php");
        $connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection".mysqli_connect_error());
        $q="select *  from manageproduct";
        $res=mysqli_query($connection,$q) or die("Error in query" . mysqli_error($connection));
        $rowcount=mysqli_affected_rows($connection);
        mysqli_close($connection);
        if($rowcount==0)
        {
            print"<option>No Categories</option>";
        }
        else{
            while($resarr=mysqli_fetch_array($res))
            {
            print"<div class='col'><a href='updateproduct.php?pid=$resarr[2]'class='prodlinks'><img src='uploads/$resarr[8]'; style='display: block;
            margin-left: auto;
            margin-right: auto;
            width: 200px;
            height:200px;'>
            <p align='center'>$resarr[3]</p></a>
            </div>";   
            }
        }
        
        
        ?>
</div>

</div>
<br><br><br><br>
<?php
    include_once("footer.php");
    ?>
</body>
</html>
