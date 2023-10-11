<?php session_start();?>
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
            background-color:white;
            border-style:solid;
            border-color:white;
            padding:10px;
            border-radius:4px;
            color:black;
        
        }
        .col-sm:hover >.prodlinks{
            color:white;
        }
        .col-sm:hover{
            border-style:solid;
            border-color:black;
            background-color:black;
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
        .col-sm:hover >a > img{
        transform: scale(1.08);
        transition: transform .2s;
       }
       @media (max-width:940px)
{
    .col-sm:hover >a > img{
        transform: scale(1);
    }

}

        </style>
    </head>
    <body>
        <?php require_once("header.php")?>
<h1 class="lead display-4"style="margin-top:100px;"align="center">
<?php
        $catid=$_GET["catid"];
        require_once("vars.php");
        $connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection".mysqli_connect_error());
        $q="select *  from managecat where catid=$catid";
        $res=mysqli_query($connection,$q) or die("Error in query" . mysqli_error($connection));
        $rowcount=mysqli_affected_rows($connection);
        mysqli_close($connection);
        $resarr=mysqli_fetch_array($res);
        print $resarr[1];
        print" Categories";
        ?>
</h1>
<div class="container"style="margin-top:100px;">
<div class="row">
        
    
        <?php
        $catid=$_GET["catid"];
        require_once("vars.php");
        $connection=mysqli_connect(dbhost,dbuname,dbpass,dbname) or die("Error in connection".mysqli_connect_error());
        $q="select *  from subcat where catid=$catid";
        $res=mysqli_query($connection,$q) or die("Error in query" . mysqli_error($connection));
        $rowcount=mysqli_affected_rows($connection);
        mysqli_close($connection);
        if($rowcount==0)
        {
            print"No Categories";
        }
        else{
            while($resarr=mysqli_fetch_array($res))
            {
                print"<div class='col-sm'>
                <a href='showproduct.php?subcatid=$resarr[0]'class='prodlinks'>
                <img src='uploads/$resarr[3]'style='width:300px;height:300px;object-fit:contain;'>
                <span class='lead'style='display:block;padding-top:20px;'>$resarr[2]
                </span></a>
              </div>";   
            }
        }
        
        
        ?>
</div>

</div>

        <?php require_once("footer.php")?>
    </body>
</html>