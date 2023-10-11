<?php session_start();?>

<html>
    <head>
    <title>
        <?php print $_SESSION["pname"]; ?> Profile
    </title>
    <style>
            .lnkbtn{
        border-style:solid;
        border-color:black;
        border-radius:5px;
        margin-top:15px;
        background-color:white;
        padding:10px;
        color:black;
        display:block;
        width:20%;
    }
    .lnkbtn:hover{
        background-color:black;
        color:white;
        border-radius:5px;
        text-decoration:none;
        transition:0.4s ease;
    }
  
    @media (max-width:940px)
    {
    .lnkbtn{
        width:50%;
    }
    table{
        margin-top:50px;
        margin-bottom:50px;
    }
    #tophead{
        margin-top:50px;
        margin-bottom:50px;
    }

    }
        </style>
            <?php require_once("extfiles.php") ?>
    </head>

    <body>


<!-- Header Condition For Admin and Normal User -->
    <?php if( empty(session_id()) && !headers_sent()){
        session_start();}
    $usertype=$_SESSION["usertype"];
    
    if($usertype=='admin'){
    require_once("adminnavbar.php");}
    else{
        require_once("header.php");  
    } ?>




<br><br>



<div class="container lead"align="center">
<h1 class="lead display-4"id="tophead">User Profile</h1>
<table class="lead"border="0px">
    <tr>
        <td >
User Name  </td><td>
<?php  
$uname= $_SESSION['pname'];
print": ";
print $uname;
print"</td></tr>";

$connection=mysqli_connect("localhost","root","","computergarage") or die("Error in connection".mysqli_connect_error());
$q="select * from signup_page where Name='$uname'";
$res=mysqli_query($connection,$q) or die("Error in query" . mysqli_error($connection));
$rowcount=mysqli_affected_rows($connection);
mysqli_close($connection);
$resarr=mysqli_fetch_array($res);
print "
 <tr><td >User ID  </td><td>: $resarr[1]</td></tr>
 <tr><td align='right'>Phone Number </td><td>:  $resarr[2]</td></tr>";
 $_SESSION["userid"]=$resarr[1];

?>

</table>
<a href="changepass.php"class="lnkbtn">Change Password</a>
<a href="changeph.php"class="lnkbtn">Change Phone Number</a>
<a href="logout.php"class="lnkbtn">Log Out</a>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br>




        







        <?php require_once("footer.php") ?>

    </body>
</html>