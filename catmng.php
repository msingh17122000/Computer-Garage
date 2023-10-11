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
    </style>
    </head>

<body>

<?php
require_once("adminnavbar.php")
?>
<br><br><br><br>
<h1 class="display-4"align="center">Manage Categories</h1><br><br>
<div class="container lead"align="center">
<form name="addcat"method="post"enctype="multipart/form-data">
<table class="feedback"border="0">
    <tr align="center">
        <td>    
<input type="text"name="catname"placeholder="New Category Name"size="30%"class="form-control">
</td>
</tr>
<tr align="center">
    <td>
<input type="file"name="catpic" style="border:none;">
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
$catname=$_POST["catname"];
$errorcode=$_FILES["catpic"]["error"];
if($errorcode==0)
{
    $catpic=time().$_FILES["catpic"]["name"];
    $tempname=$_FILES["catpic"]["tmp_name"];
    move_uploaded_file($tempname,"uploads/$catpic");
}
else{
    $catpic="defaultpic.png";
}
require_once("vars.php");
$connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection".mysqli_connect_error());
$q="insert into managecat(catname,catpic) values ('$catname','$catpic')";
$res=mysqli_query($connection,$q) or die("Error in query" . mysqli_error($connection));
$rowcount=mysqli_affected_rows($connection);
mysqli_close($connection);
if($rowcount==1){
    print"<span style='color : green;'align='center'>Category Added Successfully</span>";

}
else{
    print"<span style='color : red;'align='center'>Category Not Added Successfully</span>";
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
$q="select * from managecat";
$res=mysqli_query($connection,$q) or die("Error in query" . mysqli_error($connection));
$rowcount=mysqli_affected_rows($connection);
if($rowcount==0)
{
    print"<p align='center'class='lead'>No Categories Found</p>";
}
else{
    print'<div style="overflow:auto;">
    <table align="center"class="memtble lead">
    <tr>
    <th>
        Category ID
    </th>
    <th>
        Category Name
    </th>
    <th>
        Category Pic
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
                <td><img src='uploads/$resarray[2]'width='50px'></td>
                <td align='center'><a href='updatecat.php?cid=$resarray[0]'>Update</a></td>
                <td align='center'><a href='delcat.php?cid=$resarray[0]'>Delete</a></td>";
    }

    print"</table>
    </div>";
}

?>





<br><br><br><br>

<?php
require_once("footer.php");
?>
</body>
</html>