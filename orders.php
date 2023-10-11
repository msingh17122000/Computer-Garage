<?php session_start();
ob_start(); 
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
    include_once("adminnavbar.php");
    ?>
<body>
<br><br><br><br>

<div class="container"syle="margin-top:100px;">
<h1 class="display-4"align="center">Order Details</h1></div>
<br><br><br><br>
<div class="container">
<div style='overflow-x:auto;'>
        
    
        <?php
        $username=$_SESSION["userprimid"];
        require_once("vars.php");
        $connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection".mysqli_connect_error());
        $q="select * from ordertable order by orderdate desc";
			$res=mysqli_query($connection,$q) or die("Error in query " . mysqli_error($connection));
			$rescount=mysqli_affected_rows($connection);
			if($rescount==0)
			{
				print "No orders found";
			}
			else
			{
				print "<table class='memtble'>
				<tr>
					<th>Order Number</th>
					<th>Username</th>
					<th>Address</th>
					<th>Payment Mode</th>
					<th>Amount</th>
					<th>Date/Time</th>
					<th>Status</th>
					<th>Update Status</th>
				</tr>";
				while($resarr=mysqli_fetch_array($res))
				{				
					print "
					<tr>
					<td><a href='adminorderdetails.php?oid=$resarr[0]'>$resarr[0]</a></td>
					<td>$resarr[Username]</td>
					<td>$resarr[1]</td>
					<td>$resarr[2]</td>
					<td>$resarr[5]</td>
					<td>$resarr[4]</td>
					<td>$resarr[6]</td>
			<td><a href='updatestatus.php?oid=$resarr[0]&currst=$resarr[6]'>Update Status</a></td>
					</tr>";
				}
				print "</table><br/>";
				
				
         
        }
   
    
        
        ?>
       </div> <?php 
       print "$rescount order(s) found";?>
</div><br><br>
<div align="center">
<span class="lead"align="center"style="background-color:#fafafa;padding:10px;">
</span></div>
<br>



<br><br><br>
<?php
    include_once("footer.php");
    ?>
</body>
</html>
