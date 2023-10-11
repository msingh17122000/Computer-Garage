<?php session_start();
ob_start(); 
if(!isset($_SESSION["pname"]))
{
    header("location:login.php");
}

?>
<html>
<head>
    <title>
        Cart
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

        .carttable{
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: 0;
            padding: 0;
            width: 100%;
            table-layout: fixed;
           
        }
        .carttable , tr,td{
            overflow:hidden;
        }
        .cartimg{
            width:100px;
            height:100px;
            object-fit:contain;
        }
        @media (max-width:940px)
{
    .cartimg{
        width:50px;
        height:50px;
        object-fit:contain;
    }
}
       
        </style>
</head>
<?php
    include_once("header.php");
    ?>
<body>
<br><br><br><br>

<div class="container"syle="margin-top:100px;">
<h1 class="display-4"align="center">Shopping Cart</h1></div>
<br><br><br><br>
<div class="container">
<div class="row">
        
    
        <?php
       
        $username=$_SESSION["userprimid"];
        require_once("vars.php");
        $connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection".mysqli_connect_error());
        $q="select *  from cart where username='$username'";
        $res=mysqli_query($connection,$q) or die("Error in query" . mysqli_error($connection));
        $rowcount=mysqli_affected_rows($connection);
        mysqli_close($connection);
        if($rowcount==0)
        {
            print"No items in Your Cart &nbsp; <a href='showcat.php'>Shop Here</a>";
        }
        else{
            $grandtotal=0;
            while($resarr=mysqli_fetch_array($res))
            {
            $grandtotal=$resarr[6]+$grandtotal; 
            print"<table style='text-align:center;'class='carttable'>
            <thead>
              <tr>
                <th scope='col'>Product Picture</th>
                <th scope='col'>Product Name</th>
                <th scope='col'>Quatity</th>
                <th scope='col'>Rate</th>
                <th scope='col'>Total Cost</th>
                <th scope='col'></th>
              </tr>
            </thead>
            <tbody>
    <tr>
      <td ><img src='uploads/$resarr[2]'class='cartimg'></td>
      <td >$resarr[3]</td>
      <td >$resarr[5]</td>
      <td >Rs. $resarr[4]</td>
      <td >Rs. $resarr[6]</td>
      <td ><a href='delcartitem.php?cartid=$resarr[0]'>Remove</a></td>
    </tr></table></div></div><br><br>
   ";
   print "<div align='center'> Grand Total - $grandtotal</div> <br><br>"; 
   $_SESSION["billamount"]=$grandtotal;
   print"<div align='center'><a href='checkout.php'class='btn btn-success'>Checkout</a></div><br>";
   
            }
         
        }
   
    
        
        ?>
        
<br><br>

<br>

</div>  </div>


<br><br><br>
<?php
    include_once("footer.php");
    ?>
</body>
</html>
