<link rel="stylesheet"href="css/bootstrap.css">
<meta name="viewport"content="width=device-width,initial-scale=1.0">
<style>
    .row{
       margin-right: 0px;
       margin-left: 0px;
    }
    body{
        padding:0px;
        padding-top:35px;
        margin:0px;
        max-width: 100%;
    overflow-x: hidden;
    
    }
nav{
    height:35px;
    background-color:black;
    align-items:center;
    display:flex;
    top:0;    
    position:fixed;
    z-index:100;
    width:100%;
    justify-content:space-between;
    padding:0px 0px 0px 0px;


}
nav ul{
    display:flex;
    list-style:none;
    padding-top:20px;
    margin-right:-20px;
    


}
nav ul li a{
    text-decoration:none;
    color:white;
    font-size:18px;
    font-weight:500;
    letter-spacing:1px;
    padding:10px;
    padding-bottom:8px;
    padding-top:8px;

}

nav ul li a:hover{
    text-decoration:none;
    color:black;
    background-color:white;
    transition:0.3s ease;

}

#acc:hover{
    background-color:black;
}
nav ul li{
    margin:0px 10px;
}
.logo{
    color:white;
    font-size:30px;
    margin-bottom:10px;

    font-weight:600px;
}
.logo:hover{
    text-shadow: 0 0 2px white;
    cursor:pointer;
}
nav .menu-btn i{
    color:white;
    font-size:22px;
    cursor:pointer;
    display:none;
}
#click{
    display:none;
}

.underlined{
    border-style:solid;
    border-top:none;
    border-left:none;
    border-right:none;
    border-width:1px;
    padding:2px 2px;


}
.col-sm{

    margin:20px;
    padding:20px;
    padding:2px 2px;
    text-align:center;

    cursor:pointer;

}
/* .col-sm:hover{
    border-style:solid;
    border-radius:10px;

    text-align:center;
    border-width:1px;
    cursor:pointer;
    color:white;
    background-color:black;
    transition:0.2s ease;
} */

.slink:hover{
    text-shadow: 0 0 2px white;
}
#bg{
    font-family: Arial;
  font-size: 150px;
  background-color:white;
  margin-bottom:900px;
  opacity:0.9;
  animation: fadeIn 10s;
}
@keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}
@media (max-width:940px)
{
   
   
    .text{
        margin-top:0px;
       margin-bottom:0px;
    }
    nav ul{
        position:fixed;
        top:80px;
        left:-100%;
        background:black;
        height:100vh;
        width:100%;
        display:block;
        text-align:center;
       margin-top:-40px;
    }
    nav{
        padding:0px 50px 0px 0px;
    height:50px;
    }
    .logoimg{
        width:10px;
    }
    .restx{font-weight:400;padding-top:100px;padding-bottom:100px;font-size:50px;}
    nav ul li{
        margin:40px 0;
     
        font-size:20px;

    } 
    nav ul li a{
        font-size:20px;
        display:block;
        margin-right:50px;
    }
    nav .menu-btn i{
        display:block;
        padding-top:15px;
    }
    #click:checked ~ul{
    left:0%;

    transition:all 0.3s ease;

}
img{
       margin-top:0px;
    }
#click:checked ~ .menu-btn i:before{
    content:"\";
}
.container{
    margin-top:-50px;
}

}
.col-sm{
    padding-top:10px;
    padding-bottom:20px;
    border-radius:10px;
}
.col-sm:hover{
    background-color:black;
    border-radius:0px;
    transition:0.3s ease;
   
    opacity:0.9;
    color:white;
}


#section2{
    margin-top:100px;
}
.buylinks{
    border-style:solid;
    border-color:black;
    background-color:black;
    border-radius:0px;
    padding:10px;
    text-decoration:none;
    color:white;
}
.buylinks:hover{
  text-decoration:none;
  color:black;
  border-radius:0px;
  background-color:white;
  transition:0.3s ease;
  border-color:black;
}
.breakline{
    color:black;
}
.viewmorebtn{
  border-style:solid;padding:10px;border-radius:5px;background:#E63033;text-decoration:none;border-color:#E63033;color:white;
}
.viewmorebtn:hover{
  background-color: #C52b2f;
  transition: 0.3s ease;
  border-color:#C52b2f;
  text-decoration:none;
  color:white;
}
.footer{
  background-color:black;
  color:white;
}
.main{
background-image:url("assets/03.jpg");
background-size:100%;
padding-bottom:100vh;
position:relative;
}




body { margin: 0; } 
div#slider { overflow: hidden; }
div#slider figure img { width: 20%; float: left; }
div#slider figure { 
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 30s slidy infinite; 
}



.firstlink{
    color:black;
    background-color:none;
    border-style:solid;
    border-radius:5px;
}
.firstlink:hover{
    text-decoration:none;
    background:black;
    color:white;
    border-color:black;
    border-radius:5px;
    transition: 0.3s ease;
}

@media (max-width:940px)
{
    
    
    .firstlink{
    
        
    }
    .textin{
        background-color:white;
    }
   
}
#acc:hover{
        color:white;
        text-shadow: 0 0 2px white;
    }
.logoimg{
    opacity:0.5;
}
.logoimg:hover{
    text-shadow: 0 0 10px white;
    opacity:1;
    transition:0.5s ease;
}
.feedback{
    border-spacing: 20px;
    border-collapse: separate;
}
.table{
        overflow-x:auto;
    }
    .memtble tr td{
        padding:10px;
        text-align:center;  
    }
    table  tr th{
      padding:20px;
      background-color:black;
      color:white;
      text-align:center;  
    }




.partright{
    padding:20px;
    height:100vh;
    text-align:center;
    padding-top:30vh;
    background-color:black;
    width:50%;
    color:white;
    float:right;
}
.partleft{
    background-color:white;
    width:50%;
    float:left;
}
.sectionimages{
    background-color:black;
    height:100vh;
}
@media (max-width:940px)
{

    .partright{
        width:100%;
        height:100%;
        padding-top:5vh;
        opacity:1;
        z-index:0;
        position:fixed;
        padding:20px;
       
        background-color:black;
        
    }
    .sectionimages{
        height:60vh;
    }
   
    .partleft{
       
      display:none;

    }
    .maclink{
        display:none;
    }
}
.maclink:hover{
    text-decoration:none;
}
.partleft{
  position:absolute;
  height:80vh;
  
}
.partleft img {
  position:absolute;
  left:0;
}

/* Images Animation */

@-webkit-keyframes imgFade {
 0% {
   opacity:1;
 }
 17% {
   opacity:1;
 }
 25% {
   opacity:0;
 }
 92% {
   opacity:0;
 }
 100% {
   opacity:1;
 }
}

@-moz-keyframes imgFade {
 0% {
   opacity:1;
 }
 17% {
   opacity:1;
 }
 25% {
   opacity:0;
 }
 92% {
   opacity:0;
 }
 100% {
   opacity:1;
 }
}

@-o-keyframes imgFade {
 0% {
   opacity:1;
 }
 17% {
   opacity:1;
 }
 25% {
   opacity:0;
 }
 92% {
   opacity:0;
 }
 100% {
   opacity:1;
 }
}

@keyframes imgFade {
 0% {
   opacity:1;
 }
 17% {
   opacity:1;
 }
 25% {
   opacity:0;
 }
 92% {
   opacity:0;
 }
 100% {
   opacity:1;
 }
}
.partleft img {
  -webkit-animation-name: imgFade;
  -webkit-animation-timing-function: ease-in-out;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-duration: 8s;

  -moz-animation-name: imgFade;
  -moz-animation-timing-function: ease-in-out;
  -moz-animation-iteration-count: infinite;
  -moz-animation-duration: 8s;

  -o-animation-name: imgFade;
  -o-animation-timing-function: ease-in-out;
  -o-animation-iteration-count: infinite;
  -o-animation-duration: 8s;

  animation-name: imgFade;
  animation-timing-function: ease-in-out;
  animation-iteration-count: infinite;
  animation-duration: 8s;
}
.partleft img:nth-of-type(1) {
  -webkit-animation-delay: 6s;
  -moz-animation-delay: 6s;
  -o-animation-delay: 6s;
  animation-delay: 6s;
}
.partleft  img:nth-of-type(2) {
  -webkit-animation-delay: 4s;
  -moz-animation-delay: 4s;
  -o-animation-delay: 4s;
  animation-delay: 4s;
}
.partleft img:nth-of-type(3) {
  -webkit-animation-delay: 2s;
  -moz-animation-delay: 2s;
  -o-animation-delay: 2s;
  animation-delay: 2s;
}
.partleft img:nth-of-type(4) {
  -webkit-animation-delay: 0;
  -moz-animation-delay: 0;
  -o-animation-delay: 0;
  animation-delay: 0;
}

</style>
<script src="https://kit.fontawesome.com/a076d05399.js">
    </script>