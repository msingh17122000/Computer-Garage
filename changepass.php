<?php session_start();
if( empty(session_id()) && !headers_sent()){
    session_start();}
    ?>
<html>
<head>
<title>
    Login
</title>
<style>
    body{
    background-color:#fafafa;}
    ::placeholder{
      
        font-size:13px;
        background-color:#fafafa;
    }
    table tr td{
       padding-top:10px;
      
       padding-bottom:10px;
    }
    input{
        border-radius:4px;
        border-style:solid;
        padding:5px;
        
        
    }
    table{
        margin-top:40px;
    }
    .logbtn{
        background-color: #0095f6;
  border: none;
  color: white;
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  width:100%;
  border-radius:4px;
  cursor: pointer;
    }
    .logbtn:hover{
        background-color:#0086dd;
    }
    .signup{
        text-decoration:none;
    }
    .signup:hover{
        text-decoration:none;
    }
    .back{
    background-color:white;margin-left:600px;margin-right:600px;
    }
    .forpass{
        color:#204891;
        font-size:12px;
        

    }
    .forpass:hover{
        text-decoration:none;
        
    }
    @media (max-width:940px)
    {

    .back{
    margin-left:50px;
    margin-right:50px;
    }


    }


    </style>
<?php  

ob_start(); 
require_once("extfiles.php");
?>

</head>
<body style="background:#fafafa;">
    <?php  
    if( empty(session_id()) && !headers_sent()){
        session_start();}
    $usertype=$_SESSION["usertype"];
    
    if($usertype=='admin'){
    require_once("adminnavbar.php");}
    else{
        require_once("header.php");  
    }
    ?>
    <br><br><br>
    <div class="back">
<h1 class="display-4"align="center"style="font-size:30px;padding-top:40px;"><b>Change Password</b></h1>
<form name="login"method="post">
<table align="center"cellspacing:10;>
<tr>
    <td><input type="password"placeholder="Current Password"name="cpass"></td>
</tr>
</tr>
<tr>
    <td><input type="password"placeholder="New Password"name="npass"></td>
</tr>
<tr>
    <td><input type="password"placeholder="Confirm New Password"name="cnpass"></td>
</tr>
<tr align="center">
    <td><input type="submit"class="logbtn" value="Change"name="cnge"></td>
</tr>


</tr> 
<tr align="center">
    <td>


<br><br>
<?php
ob_start(); 
if(isset($_POST["cnge"]))
{   $userid=$_SESSION["userid"];
    $cpass=$_POST["cpass"];
    $newpass=$_POST["npass"];
    $cnewpass=$_POST["cnpass"];
    if($newpass==$cnewpass){


        require_once("vars.php");
        $connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection".mysqli_connect_error());
        $q="update signup_page set Password='$newpass' where Username='$userid' and Password='$cpass'";
$res=mysqli_query($connection,$q) or die("Error in query".mysqli_error($connection));

$rowcount=mysqli_affected_rows($connection);
mysqli_close($connection);
        if($rowcount==1)
        {
           
      print"<p style='color:#5CDB95;'>Password Changed Successfully</p>";

           
        }
        else{
            print"<p style='color:red;'>Wrong Current Password</p>";
        }
    }
    else{
        print"<p style='color:red;'>Your Password Does'nt Match</p>";
    }
}
ob_flush();
?>
</td>
</tr>
</tr>    
</table>
</form>
</div>



<br><br><br>
<?php  
    require_once("footer.php");
    ?>
</body>
</html>
