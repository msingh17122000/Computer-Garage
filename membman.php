<?php session_start();?>
<html>
    <head>
        <title>
            Members Management
        </title>

        <?php
        require_once("extfiles.php");
        ?>
<style>
    .table{
        overflow-x:auto;
    }
    .memtble tr td{
        padding:10px;
        text-align:center;  
    }
    table  tr th{
      padding:20px;
      background-color:black;
      color:white;
      text-align:center;  
    }
    .delbtn{
        border-style:solid;
        border-color:#E63033;
        background-color:#E63033;
        border-radius:4px;
        color:white;
        padding-right:5px;
        padding-left:5px;
        text-decoration:none;
    }
    .delbtn:hover{
        text-decoration:none;
        border-color:red;
        background-color:red;
        color:white;
    }
    .highlight{
        background-color:#5CDB95;
        padding:10px;
    }
</style>
    </head>

<body>

<?php
require_once("adminnavbar.php")
?>
<br><br><br><br>
<h1 class="display-4"align="center">Manage Lists of Members </h1><br><br>

<?php

require_once("vars.php");
$connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection".mysqli_connect_error());
$q="select * from signup_page";
$res=mysqli_query($connection,$q) or die("Error in query" . mysqli_error($connection));
$rowcount=mysqli_affected_rows($connection);
mysqli_close($connection);
    
        if($rowcount==0)
        {
          print"No Members Found";

        }
        else{
            print"<div style='overflow-x:auto;'><table border='0px'class='memtble lead'align='center'><tr><th>Name</th><th>UserName</th><th>Phone</th><th>Password</th><th>User Type</th><th>Delete Member</th></tr>";
            while($resarr=mysqli_fetch_array($res))
            {
                print"<tr><td>$resarr[0]</td>
                <td>$resarr[1]</td>
                <td>$resarr[2]</td>
                <td>$resarr[3]</td>
                <td>$resarr[4]</td>
                <td><a href='delmemb.php?un=$resarr[1]'class='delbtn'>Delete</a></td> </tr>";
            }

            print"</table></div><br><br><br><div class='container lead'align='center'><span class='highlight'><b>Number of  Members Found : $rowcount</b></span></div>";


        }
        
    ?>
<br><br><br><br>








<?php
require_once("footer.php");
?>
</body>
</html>