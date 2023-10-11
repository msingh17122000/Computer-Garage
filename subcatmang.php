<?php session_start();?>
<html>
    <head>
        <title>
           Manage Categories
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
<h1 class="display-4"align="center">Add Sub-Categories</h1><br><br>
<div class="container lead"align="center">
<form name="addsubcat"method="post"enctype="multipart/form-data">
<table class="feedback"border="0">
<tr align="center">
        <td> 
<select name="cat"style="width:300px;"class="form-control">
    <option>Choose Category</option>
    <?php
require_once("vars.php");
$connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection".mysqli_connect_error());
$q="select *  from managecat";
$res=mysqli_query($connection,$q) or die("Error in query" . mysqli_error($connection));
$rowcount=mysqli_affected_rows($connection);
mysqli_close($connection);
if($rowcount==1)
{
    print"<option>No Categories</option>";
}
else{
    while($resarr=mysqli_fetch_array($res))
    {
        print"<option value='$resarr[0]'>$resarr[1]</option>";
    }
}


    ?>
</select>
</td>
</tr>
<tr align="center">
    <td>
<input type="text"name="subcatname" placeholder="Sub Category Name"size="30%"class="form-control">
</td>
</tr>

<tr align="center">
    <td>
<input type="file"name="subcatpic" style="border:none;"class="form-control">
</td>
</tr>
<tr align="center">
    <td>
        <input type="submit"name="sbtn"value="Add Category"class="btn btn-success">
    </td>
</tr>
<tr align="center">
    <td>
<?php
if(isset($_POST["sbtn"]))
{
    $cid=$_POST["cat"];
$scatname=$_POST["subcatname"];
$errorcode=$_FILES["subcatpic"]["error"];
if($errorcode==0)
{
    $subcatpic=time().$_FILES["subcatpic"]["name"];
    $tempname=$_FILES["subcatpic"]["tmp_name"];
    move_uploaded_file($tempname,"uploads/$subcatpic");
}
else{
    $subcatpic="defaultpic.png";
}
require_once("vars.php");
$connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection".mysqli_connect_error());
$q="insert into subcat(catid,subcatname,subcatpic) values ('$cid','$scatname','$subcatpic')";
$res=mysqli_query($connection,$q) or die("Error in query" . mysqli_error($connection));
$rowcount=mysqli_affected_rows($connection);
mysqli_close($connection);
if($rowcount==1){
    print"<span style='color : green;'align='center'>Sub Category Added Successfully</span>";

}
else{
    print"<span style='color : red;'align='center'>Sub Category Not Added Successfully</span>";
}

} 
         
    ?>
    </td>
</tr>
</table>
</form>
</div>
<br><br><br><br>

<?php
require_once("vars.php");
$connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection".mysqli_connect_error());
$q="select * from subcat";
$res=mysqli_query($connection,$q) or die("Error in query" . mysqli_error($connection));
$rowcount=mysqli_affected_rows($connection);
if($rowcount==0)
{
    print"<p class='lead'align='center'>No Categories Found</p>";
}
else{
    print'
    <div style="overflow:auto;">
    <table align="center"class="memtble lead">
    <tr>
    <th>
       Sub Category ID
    </th>
    <th>
       Category ID
    </th>
    
    <th>
        Sub Category Name
    </th>
    <th>
        Sub Category Pic
    </th>
    <th>
        Update
    </th>
    <th>
        Delete
    </th>
    </tr>';
    while($resarray=mysqli_fetch_array($res))
    {
        print"<tr><td align='center'>$resarray[0]</td>
                <td align='center'>$resarray[1]</td>
                <td>$resarray[2]</td>
                <td><img src='uploads/$resarray[3]'width='50px'></td>
                <td align='center'><a href='updatesubcat.php?subcid=$resarray[0]'>Update</a></td>
                <td align='center'><a href='delsubcat.php?subcatid=$resarray[0]'>Delete</a></td>";
    }

    print"</table>
    </div>
    ";
}

?>





<br><br><br><br>

<?php
require_once("footer.php");
?>
</body>
</html>