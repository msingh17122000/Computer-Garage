<html>
<head>
<title>
    Signup
</title>
<style>


/* Basic Styling */


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
    background-color:white;
    margin-left:600px;
    margin-right:600px;
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
    require_once("extfiles.php");
    ?>

</head>
<body style="background:#fafafa;">
    <?php  ob_start();
    require_once("header.php");
    ?>
    <br><br><br>
    <div class="back">
<h1 class="display-4"align="center">Signup</h1>
<form name="login"method="post"enctype="multiplart/form-data">
<table align="center"cellspacing:10;>
<tr>
    <td><input type="text"placeholder="Full Name"name="pname">
</td>
</tr> 
<tr>
    <td><input type="text"placeholder="Phone Number"name="pnumber">
</td>
</tr>
<tr>
    <td><input type="text"placeholder="Your Email"name="username">
</td>
</tr>
<tr>
    <td><input type="password"placeholder="Password"name="pass"></td>
</tr>
<tr>
    <td><input type="password"placeholder="Confirm Password"name="cpass"></td>
</tr>
<tr align="center">
    <td><input type="submit"class="logbtn" value="Sign up"name="signup"></td>
</tr>
<tr align="center">
    <td><hr align="center"color="black"></td>
</tr>
<tr align="center">
    <td style="font-size:15px;">Have an account? <a href="login.php"class="signup">Log in </a></td>
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
if(isset($_POST["signup"]))
{
    $name=$_POST["pname"];
    $phone=$_POST["pnumber"];
    $username=$_POST["username"];
    $password=$_POST["pass"];
    $cpass=$_POST["cpass"];
    
    if($password==$cpass)
    {
        require_once("vars.php");
        $connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection".mysqli_connect_error());
        $qinsert="insert into signup_page values('$name','$username','$phone','$password','normal')";
mysqli_query($connection,$qinsert) or die("Error in query".mysqli_error($connection));
$rowcount=mysqli_affected_rows($connection);
mysqli_close($connection);
    
        if($rowcount==1)
        {
           print"<script>alert('Signup Successfull You can LogIn Now');</script>";
           

        }
        else{
            print"There was error in signup";
        }
    }
    else{
        echo"<script>alert('Password did'nt matched');</script>";
        }

}

?>
<?php  
    require_once("footer.php");
    ?>
</body>
</html>
