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
    <title>My Cart</title>
</head>
<body>
<div id = 'heading'>
<?php echo ucwords($_SESSION['CName'].'\'s Cart');
?>
</div>

<div class='thetable'>
<?php
$conn=mysqli_connect("localhost","root","","russianggdb");
$result=mysqli_query($conn,"select * from cart");
if(mysqli_num_rows($result))
{
$query="select Prod_Name, Prod_Price, Prod_Quantity, Cum_Price from cart where 1 order by Prod_Name";
$result=mysqli_query($conn,$query);
$num = mysqli_num_rows($result);
echo '
<table class=cartTable>
<tr>
<td>Item Name</td>
<td>Price per kg</td>
<td>Quantity</td>
<td>Final Price</td>
</tr>';
for($i=0;$i<$num;$i++)
{
    $row=mysqli_fetch_assoc($result);
    echo '
    <tr>
    <td>'.$row['Prod_Name'].'</td>
    <td align="right">&#x20B9; '.$row['Prod_Price'].'</td>
    <td align=center>'.$row['Prod_Quantity'].'</td>
    <td align="right">&#x20B9; '.$row['Cum_Price'].'</td>
    <tr>';
}



$sql=mysqli_query($conn,"CALL FINALBILL()");
$row=mysqli_fetch_assoc($sql);
$billamount=$row['billamount'];


echo '

<tr>
<td colspan=3>Total Payable Amount (cash only)</td>
<td align=right>&#x20B9; '.$billamount.'

</table>';
mysqli_close($conn);
}

else 
{
    header("Location:emptycart.php");
}

?>
</div>


<a href="shopping.php"><div id=backbutton><img src="images/back.png"  width=61.5px height=61.5px></div></a>

<a href="deliveryinfo.php"><div id=orderbutton><img src="images/order.png"  width=61.5px height=61.5px></div></a>

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
    background-image: url("background-images/green-bg.jpg");
    background-size: 120vmax;
    background-attachment: fixed;
   
}
#heading{
    text-shadow:0px 0px 2px black,0px 0px 2px black,0px 0px 15px black;
    color:rgb(240,240,240);
    border-radius:20px;
    font-size:45px;
    background-color:rgb(0,0,0,0.7);
    width:fit-content;
    display:absolute;
    margin:0 auto;
    padding:10px 25px;
    font-family: impact;
    letter-spacing:1.4px;
    box-shadow:3px 3px 16px black;
    border-top:rgb(100,100,100), 0.5px solid;
    border-left:rgb(50,50,50), 0.5px solid;
    border-right:white 1px solid;
    border-bottom:white 0.5px solid;
    margin-top:1vw;
    margin-bottom:3vw;

}


#backbutton{
    
    display:inline;
    position:absolute;
    margin:35px auto;
    cursor: pointer;
    left:2vw;
    top:0.4vw;    
    width:61.5px;
    height:61.5px;
}

#backbutton:active{
    transform:translateY(2px);  
    
}


#orderbutton{
    
    display:inline;
    position:absolute;
    margin:35px auto;
    cursor: pointer;
    right:2vw;
    top:0.4vw;    
    width:61.5px;
    height:61.5px;
}

#orderbutton:active{
    transform:translateY(2px);  
    
}



.cartTable{
 margin:1vw;
 font-weight:700;
 background-color:rgb(11,11,11,0.93);
 font-size:31px;
 border:0;
 border-radius:7px;
 text-shadow:0px 0px 5px black;
 font-family:comfortaa;
 margin-top:0;
}
.cartTable:hover{
   background-color:rgb(0,0,0,0.95);
}
.cartTable td {
 border:2px #ff6200 solid;
 padding:12px;
 color:#ffc5a1;
 border-radius:6px;
}


.thetable{
    overflow-y:auto;
    height:500px;
    position:absolute;
    top:55%;
    left:50%;
    transform:translate(-50%,-50%);
    width:fit-content;


}

.thetable::-webkit-scrollbar{
    width:25px;

}

.thetable::-webkit-scrollbar-thumb{
    background-color:rgb(209,77,0);
}

.thetable::-webkit-scrollbar-track{
    background-color:rgba(0,0,0,0.9 );
}


/*styling the footer*/
#footText {
    color:white;
    position:fixed;
    bottom:0;
    left:0;
    right:0;
    background-image: linear-gradient(to right,rgb(0,0,0,.5),rgb(0,0,0,.2),rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7),rgb( 0, 0,0,0.7),rgb(0,0,0,.2),rgb(0,0,0,.5));
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