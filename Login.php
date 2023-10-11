<html>
<head>
<title>
    Login
</title>
<?php  
session_start();
ob_start(); 
require_once("extfiles.php");
?>
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
</head>
<body style="background:#fafafa;">
    <?php  
    require_once("header.php");
    ?>
    <br><br><br>
    <div class="back">
<h1 class="display-4"align="center">Login</h1>
<form name="login"method="post">
<table align="center"cellspacing:10;>
 <tr>
    <td><input type="text"placeholder="Enter Email"name="username">
</td>
</tr>
<tr>
    <td><input type="password"placeholder="Enter Password"name="pass"></td>
</tr>
<tr align="center">
    <td><input type="submit"class="logbtn" value="Log In"name="lbtn"></td>
</tr>
<tr align="center">
    <td><hr align="center"color="black"></td>
</tr>
<tr align="center">
    <td><a href="forgetpass.php"class="forpass">Forgot Password ?</a></td>
</tr>
<tr align="center">
    <td style="font-size:15px;">Don't have an account? <a href="signup.php"class="signup">Sign up</a></td>
</tr>
</tr> 
<tr align="center">
    <td></td>
</tr>
</tr>    
</table>
</form>
</div>


<br><br>
<?php
ob_start(); 
if(isset($_POST["lbtn"]))
{
$username=$_POST["username"];
$password=$_POST["pass"];
require_once("vars.php");
$connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection".mysqli_connect_error());
$q="select * from signup_page where username='$username'";
$res=mysqli_query($connection,$q) or die("Error in query".mysqli_error($connection));
$rowcount=mysqli_affected_rows($connection);

if($rowcount==1)
{
        $resarray=mysqli_fetch_array($res);
        //Check for admin and password
           if($resarray[4]=="admin"&& $password==$resarray[3])
           {
            $username=$_POST["username"];
            require_once("vars.php");                                                                                                       
            $connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection".mysqli_connect_error());
            $q="select * from signup_page where username='$username'";
            $res=mysqli_query($connection,$q) or die("Error in query".mysqli_error($connection));
                $resarray=mysqli_fetch_array($res);
                $_SESSION["pname"]=$resarray[0];
                $_SESSION["usertype"]=$resarray[4];
                $_SESSION["userprimid"]=$username;
                header("location:adminhome.php");
            }
            
            //Check for normal user and password
           else if($resarray[4]=="normal" && $password==$resarray[3])
            {
             $username=$_POST["username"];
             $connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection".mysqli_connect_error());
             $q="select * from signup_page where username='$username'";
             $res=mysqli_query($connection,$q) or die("Error in query".mysqli_error($connection));
                 $resarray=mysqli_fetch_array($res);
                 $_SESSION["pname"]=$resarray[0];
                 $_SESSION["usertype"]=$resarray[4];
                 $_SESSION["userprimid"]=$username;
                 header("location:index.php");
            }
            else{
                     print"<div align='center'style='color:red;'>Password not Matched</div>";
                     }
             
   
        }
else{
            print"<script>alert('No user found');</script>";
    }
    mysqli_close($connection);
    }

?>




<br><br><br>

<?php  
    require_once("footer.php");
    ?>
</body>
</html>
