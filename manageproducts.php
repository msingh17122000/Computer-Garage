<?php session_start();?>
<html>
    <head>
        <title>
        Manage Products
        </title>

        <?php
        require_once("extfiles.php");
        ?>
<style>
    table tr td{
        width: 150px;
        text-align: center;
        padding: 5px;
    }
    table tr th{
        width: 150px;
        text-align: center;
        padding: 5px;
    }
    .table{
        overflow-x:auto;
    }
    </style>
    </head>

<body>

<?php
require_once("adminnavbar.php")
?>
<br><br><br><br>
<h1 class="display-4"align="center">Manage Products</h1><br><br>
<div class="container lead"align="center">
<form name="addsubcat"method="post"enctype="multipart/form-data">
<table class="feedback"border="0">
<tr align="center">
        <td> 
<select name="cat"class="form-control"style="width:300px;">
    <option>Choose Category</option>
    <?php
require_once("vars.php");
$connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection".mysqli_connect_error());
$q="select *  from managecat";
$res=mysqli_query($connection,$q) or die("Error in query" . mysqli_error($connection));
$rowcount=mysqli_affected_rows($connection);
mysqli_close($connection);
if($rowcount==0)
{
    print"<option>No Categories</option>";
}
else
{
    {
        if(isset($_POST["showsubcat"]))
        {
            $cid=$_POST["cat"];
            while($resarr=mysqli_fetch_array($res))
            {
                if($cid==$resarr[0])
                {
                    print "<option value='$resarr[0]' selected>$resarr[1]</option>";
                }
                else
                {
                    print "<option value='$resarr[0]'>$resarr[1]</option>";
                }
            }
        }
        else
        {
            while($resarr=mysqli_fetch_array($res))
            {
                print "<option value='$resarr[0]'>$resarr[1]</option>";
            }
        }
    }
}


    ?>
</select>
</td>
</tr>
<tr><td>
<input type="submit"name="showsubcat"value="Show"class="btn btn-success">
</td></tr>
<tr align="center">
    <td>
    <select name="subcat" class="form-control"style="width:300px;">
						<option value=''>Choose Sub Category</option>
						<?php
						if(isset($_POST["showsubcat"]))
						{
							$cid=$_POST["cat"];
							require_once("vars.php");
							$conn=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection " . mysqli_connect_error());

							$q="select * from subcat where catid='$cid'";
							
							$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
							
							$rescount=mysqli_affected_rows($conn);
							
							if($rescount==0)
							{
								print "<option value=''>No Sub Categories</option>";
							}
							else
							{
								while($resarr=mysqli_fetch_array($res))
								{
									print "<option value='$resarr[0]'>$resarr[2]</option>";
								}
							}
							mysqli_close($conn);
						}
						?>
					</select>
</td>
</tr>
<tr align="center">
    <td>
    <input type="text" name="productname" placeholder="Product Name" class="form-control"> </td></tr>
				<tr><td>	<input type="text" name="rate" placeholder="Rate"class="form-control" ></td></tr>
                <tr><td><input type="text" name="discount" placeholder="Discount" class="form-control"></td></tr>
					
                <tr><td><textarea name="description" class="form-control" placeholder="Description"></textarea></td></tr>
					
			
                <tr><td><input type="text" name="stock" placeholder="Stock" class="form-control"></td></tr>
					
                <tr><td><input type="file" name="productpic"></td></tr>
                <tr><td><input type="submit" name="btn" value="Add Product"class="btn btn-success"></td></tr>

    </td>
</tr>
</table>
</form>
<?php
if(isset($_POST["btn"]))
				{
					require_once("vars.php");
					$conn=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection " . mysqli_connect_error());
					$cid=$_POST["cat"];
					$scid=$_POST["subcat"];
					$pname=mysqli_real_escape_string($conn,$_POST["productname"]);
					$rate=$_POST["rate"];
					$discount=$_POST["discount"];
					$description=mysqli_real_escape_string($conn,$_POST["description"]);
					$stock=$_POST["stock"];
					$errcode=$_FILES["productpic"]["error"];
					
					if($errcode==0)
					{
						$ppic=time().$_FILES["productpic"]["name"];
						$tname=$_FILES["productpic"]["tmp_name"];
						move_uploaded_file($tname,"uploads/$ppic");
					}
					else
					{
						$ppic="defaultpic.png";
					}

					$q="insert into manageproduct(catid,subcatid,productname,rate,discount,description,stock,productpic) values('$cid','$scid','$pname','$rate','$discount','$description','$stock','$ppic')";
					mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
					
					$rescount=mysqli_affected_rows($conn);
					mysqli_close($conn);
					if($rescount==1)
					{
						print "Product added successfully";
					}
					else
					{
						print "Product not added successfully";
					}
				}
				?>
</div>
<br><br><br><br>





<br><br><br><br>

<?php
require_once("footer.php");
?>
</body>
</html>