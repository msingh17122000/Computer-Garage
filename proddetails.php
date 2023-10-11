<?php session_start();

ob_start();
?>
<html>
    <head>
        <title>
            Categories
        </title>

        <?php require_once("extfiles.php")?>
        <style>
       body{
                background-color:white;
                color:black;
            }
       
        .col-sm{
            margin:10px;
            background-color:#fafafa;
            border-style:solid;
            border-color:#fafafa;
            padding:10px;
            border-radius:4px;
            color:black;
        
        }

        .col-sm:hover{
            border-style:solid;
            border-color:black;
            background-color:#fafafa;
            border-radius:4px;
          
        }
        .prodlinks{
            text-decoration:none;
            color:black;
           
        }
        .prodlinks:hover{
            text-decoration:none;
            color:black;
        }
       .prod-image{
        width:30%;
        float:left;
        padding-top:50px;
      
       }
       .prod-details{
        width:70%;
        float:right;
        background-color:#fafafa;
        padding:20px;
       
       }
       @media (max-width:940px)
{
        .prod-image{
            width:100%;
            margin-bottom:20px;
            
        }
        .prod-details{
            width:100%;
            
        }
}

        </style>
    </head>
    <body>
        <?php require_once("header.php")?>

<div class="container"style="margin-top:100px;">
<div class="row">
        
    
        <?php
        $pid=$_GET["pid"];
        require_once("vars.php");
        $connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection".mysqli_connect_error());
        $q="select *  from manageproduct where productid=$pid";
        $res=mysqli_query($connection,$q) or die("Error in query" . mysqli_error($connection));
        $rowcount=mysqli_affected_rows($connection);
        mysqli_close($connection);
        $resarr=mysqli_fetch_array($res);
     
        
        ?>

<div class="container">
    <div class="prod-image">
    <form name="cart"method="POST">
        <?php
        require_once("vars.php");
        $connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection".mysqli_connect_error());
        $q="select *  from manageproduct where productid=$pid";
        $res=mysqli_query($connection,$q) or die("Error in query" . mysqli_error($connection));
        $rowcount=mysqli_affected_rows($connection);
        mysqli_close($connection);
        $resarr=mysqli_fetch_array($res);
        $ramount=($resarr[4]*$resarr[5])/100;
        $discount=$resarr[4]-$ramount;
    print"<img src='uploads/$resarr[8]'style='width:300px;height:300px;object-fit:contain;'>";
    ?>
    </div>
    <div class="prod-details">
    <?php
        require_once("vars.php");
        $connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection".mysqli_connect_error());
        $q="select *  from manageproduct where productid=$pid";
        $res=mysqli_query($connection,$q) or die("Error in query" . mysqli_error($connection));
        $rowcount=mysqli_affected_rows($connection);
        mysqli_close($connection);
        $resarr=mysqli_fetch_array($res);
    print"<h1 class='lead display-4'style='text-align:center'>$resarr[3]</h1><br>
    <p class='lead'><b>Description </b><br>$resarr[6]</p><br><p class='lead'><del><b>Rs.$resarr[4] </b></del><b> &nbsp;off</b></p>
    <p class='lead'><b>Price -</b> Rs. $discount <b class='text-success'style='padding-left:20px;'>$resarr[5]% off</b>
    <br></p>
   <span class='lead'>Quantity -</span> 

    <select name='cart'class='form-select form-select-sm'> <option value=''>Choose</option>";
    if($resarr[7]>5)
    {
   for($x=1;$x<=5;$x++)
        {
            print"<option>$x</option>";
        }
    }
    else
    {
        for($x=1;$x<=$resarr[7];$x++){
            print"<option>$x</option>";
        }
        
        
    }
    print"</select>";
    if($resarr[7]>0) {
        print"<br><br>
        <input type='submit'class='btn btn-success'name='addcart'value='Add to Cart'>";
        }
        else{
            print"<br><br><p class='lead text-danger'>Out of Stock</p>";
        }
     
    if(isset($_POST["addcart"]))
    {
        if(isset($_SESSION["pname"]))
        {   
           $username=$_SESSION["userprimid"]; 
           $qty=$_POST["cart"];
           $totalcost=$discount*$qty;
            $productid=$_GET["pid"];
            $_SESSION=$productid;
            require_once("vars.php");
            $connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection".mysqli_connect_error());
            $q="insert into cart(productid,prodpic,prodname,rate,qty,totalcost,username) values ('$productid','$resarr[8]','$resarr[3]','$discount ','$qty','$totalcost','$username')";
            $res=mysqli_query($connection,$q) or die("Error in query" . mysqli_error($connection));
            $rowcount=mysqli_affected_rows($connection);
            mysqli_close($connection);
            
           if($rowcount==1){

            print"<br><br><span class='lead text-success'>Item Added To Cart Successfully</span>";
           }
           else{
            print"<br><span class='lead text-danger'>There was Error occured Please Try Again</span>";
           }

        }
        else{
            header("location:login.php");
        }

    }
     ?>
    </div>
    </div>
</div>

</div>
</form>
        <?php require_once("footer.php")?>
    </body>
</html>