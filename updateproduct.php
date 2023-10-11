<?php
ob_start();
session_start();
require_once("extfiles.php");

if(!isset($_SESSION["pname"]))
{
    header("location:login.php");       //check for login
}
if($_SESSION["usertype"]!=="admin"){
    header("location:login.php");           //admin pages security
   }
?>


<html>
<head><title>Update Product</title>



</head>
<body>
<?php
require_once("adminnavbar.php");
?>

<?php
$pid=$_GET["pid"];
require_once("vars.php");
$connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection " . mysqli_connect_error());

		$q="select *  from manageproduct where productid=$pid";
        $res=mysqli_query($connection,$q) or die("Error in query" . mysqli_error($connection));
        $rowcount=mysqli_affected_rows($connection);
		$resarr=mysqli_fetch_array($res);
        mysqli_close($connection);
?>


		<div class="container" align="center"style="margin-top:50px;">
			<h2 class="lead display-4">Update Product</h2>
            <br><br>

<!-- Start of From -->

			<div class="container">
				<form name="form2" method="post" enctype="multipart/form-data">
				<br><label for="productname" class="lead"><b>Enter Name if Required</b></label><br>
					<input style="text-align:center;"type="text" value="<?php print $resarr[3];?>" name="productname" placeholder="Product Name" required=" " ><br/>
					<br><label for="productname" class="lead"><b>Enter Number of Stock</b></label><br>
					<input type="text"name="stock"style="text-align:center;" value="<?php print $resarr[7];?>"><br><br>
					<?php 
					print "<img src='uploads/$resarr[8]' height='100'>"; ?>
					
					<br/><br/><br><br>
					<b>Choose new image, if required</b>
					<br/><br>
					<input type="file" name="updateppic"><br><br><br>
					<input type="submit" name="btn" value="Update Product"class="btn btn-success">
				</form>
				
				<?php
				if(isset($_POST["btn"]))
				{	
					$productname=$_POST["productname"];
					$stock=$_POST["stock"];
					$pid=$_GET["pid"];
					$errcode=$_FILES["updateppic"]["error"];
					if($errcode==0)
					{
						$scpic=time().$_FILES["updateppic"]["name"];
						$tname=$_FILES["updateppic"]["tmp_name"];
						move_uploaded_file($tname,"uploads/$scpic");
					}
					else
					{
						$scpic=$resarr[8];
					}
					require_once("vars.php");
			$connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection " . mysqli_connect_error());

					$q="update manageproduct set productname='$productname', productpic='$scpic' ,stock='$stock' where productid='$pid'";
					
					mysqli_query($connection,$q) or die("Error in query " . mysqli_error($connection));
					
					$rescount=mysqli_affected_rows($connection);
					mysqli_close($connection);
					
					if($rescount==1)
					{
						header("location:viewproducts.php");
					}
					else
					{
						print "Category not updated successfully";
					}
				}
				print"<a class='btn btn-danger'href='delproduct.php?pid=$pid'>Remove</a>";
				?>
				
			</div><br/>
			
			
			
			
		</div>
		<br/>
			
	</div>
<?php
require_once("footer.php");
?>
</body>
</html>