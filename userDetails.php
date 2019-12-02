<?php
session_start();
if($_SESSION['CName']==NULL)
header("location:index.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">
    <title>User Details</title>
</head>
<body>
<div id = 'heading'>
USER DETAILS
</div>
    


<table class = 'contentTable' cellspacing=4 allign='center'>
<tr>
<td> Name </td>
<td> <?php echo ucwords(strtolower($_SESSION['CName']));?>  </td>
</tr>
<tr>
<td> Gender </td>
<td> <?php echo ucwords(strtolower($_SESSION['cGender']));?>  </td>
</tr>
<tr>
<td> City </td>
<td> <?php echo ucwords(strtolower($_SESSION['CCity']));?>  </td>
</tr>
<tr>
<td> Email </td>
<td> <?php echo strtolower($_SESSION['CEmail']);?>  </td>
</tr>

</table>

<a href="home.php"><div id=backbutton><img src="images/back.png"  width=61.5px height=61.5px></div></a>





<div id=footText>
                        <span id=copyright>&copy;</span>2019 SANTOSH PANDEY  |  ALL RIGHTS RESERVED  |  RGG&#x2122;
                </div>

</body>
</html>


<style>
@font-face { font-family: "XiaoWei"; 
    src: url('fonts/XiaoWei.ttf'); } 
@font-face { font-family: "Comfortaa";
    src: url('fonts/Comfortaa.ttf'); }
@font-face {font-family: 'creteround';
    src:url('fonts/Crete_Round/CreteRound-Regular.ttf');}
@font-face {font-family: 'OldStandard';
    src:url('fonts/Old Standard/OldStandardTT-Regular.ttf');}

    body {
    margin:0;
    background-image: url("background-images/uni-theme.jpg");
    background-size: 110vmax;
    background-attachment: fixed;
   
}
#heading{
    text-shadow:0px 0px 2px black,0px 0px 2px black,0px 0px 15px black;
    color:rgb(200,200,200);
    border-radius:20px;
    font-size:50px;
    background-color:rgb(0,0,0,0.4);
    width:fit-content;
    display:absolute;
    margin:0 auto;
    padding:15px 25px;
    font-family: impact;
    letter-spacing:1.4px;
    box-shadow:0px 0px 60px grey;
    border-top:rgb(100,100,100), 0.5px solid;
    border-left:rgb(50,50,50), 0.5px solid;
    margin-top:2vw;
    margin-bottom:2vw;
}


.contentTable{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color:rgb(11,11,11,0.7);
    color:white;
    font-size:38px;
    border:0;
    cellspacing:4px;
    border-radius:5px;
    text-shadow:0px 0px 5px black;

}
.contentTable td {
    border:1px white solid;
    padding:11px;
    border-radius:5px;
}

#backbutton{
    
    display:inline;;
    position:absolute;
    margin:35px auto;
    cursor: pointer;
    left:2vw;
    top:0.4vw;    
    width:60px;
    height:60px;
}

#backbutton:active{
    transform:translateY(2px);  
    
}
/*This is the footer...which contains information about the author and copywright info*/
#footText {
    color:white;
    position:fixed;
    bottom:0;
    right:0;
    left:0;
    background-image: linear-gradient(to right,rgb(0,0,0,.5),rgb(0,0,0,.2),rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.6),rgb( 0, 0,0,0.6),rgb(0,0,0,.2),rgb(0,0,0,.5));
    font-family: xiaowei;
    text-align: center;
    font-size: 14px;
    letter-spacing: 7px;
    padding: 2px;
    margin: 0 4px;
    margin-bottom: 2px;
    margin-top: 1vw;
    border-radius: 10px;
    text-shadow:0px 0px 50px black;
}
#copyright{
    font-size: 18px;
    vertical-align: -.75px;
    text-shadow:0px 0px 10px black;
 }
 
</style>


