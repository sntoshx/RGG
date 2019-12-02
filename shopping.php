<?php
session_start();
if($_SESSION['CName']==NULL)
header("location:index.php")
?>


<?php
$conn=mysqli_connect("localhost","root","","russianggdb");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">
    <title>Start Shopping</title>
</head>
<body>
<div id = 'heading'>
LET'S SHOP!
</div>
<div class=overall>
<div class=tables>
<!----------------------------FRUIT TABLE----------------------------------------------->
<div class='fTable'>
<?php 
echo'
<table class = "fruitTable" cellspacing=4>
<tr>
<td><b>Fruit Name</b> </td>
<td> <b>Price (in &#x20B9;)</B </td>
</tr>';
$query=mysqli_query($conn,"select Fruit_Name, Fruit_Price from fruits");
$rowcount=mysqli_num_rows($query);
    for($i=0;$i<$rowcount;$i++)
    {
        $row=mysqli_fetch_assoc($query);
echo'
        <tr><td style="min-width:150px">'. $row["Fruit_Name"]. '</td>
<td align=right>'. $row["Fruit_Price"].'</td></tr>';

    }   
echo'</table>';
?>
</div>
<!-------------------------------------VEGETABLES TABLE-------------------------------------->
<div class = vTable>
<?php
echo '<table class = "vegTable" cellspacing=4>
<tr>
<td><b>Veggie Name</b>
</td><td><b>Price (in &#x20B9;)</B></td>
</tr>';
$query=mysqli_query($conn,"select Veg_Name, Veg_Price from vegetables");
$rowcount=mysqli_num_rows($query);

for($i=0;$i<$rowcount;$i++)
{
    $row=mysqli_fetch_assoc($query);
    echo '<tr>
    <td style="min-width:150px">'.$row['Veg_Name'].'</td>
    <td align=right>'.$row['Veg_Price'].'</td>
    </tr>';
}
echo '</table>';
mysqli_close($conn);
?>
</div>
</div>
<!--------------------------------------------------------------------------------->
<div class='machinebox'>
<form class='box' action='cartProcessing.php' method='post'>
<select name= productName>
<option>	Apple	</option>
<option>	Aubergine	</option>
<option>	Avacado	</option>
<option>	Banana	</option>
<option>	Beans	</option>
<option>	Beetroot	</option>
<option>	Black grapes	</option>
<option>	Bottlegourd	</option>
<option>	Broccoli	</option>
<option>	Cabbage	</option>
<option>	Capsicum	</option>
<option>	Carrot	</option>
<option>	Cauliflower	</option>
<option>	Cherries	</option>
<option>	Coconut	</option>
<option>	Corn	</option>
<option>	Cucumber	</option>
<option>	Curryleaves	</option>
<option>	Custard-apple	</option>
<option>	Drumsticks	</option>
<option>	Garlic	</option>
<option>	Ginger	</option>
<option>	Grapes	</option>
<option>	Jackfruit	</option>
<option>	Kiwi	</option>
<option>	Lemon	</option>
<option>	Lettuce	</option>
<option>	Litchi	</option>
<option>	Mango	</option>
<option>	Mousambi	</option>
<option>	Mushroom	</option>
<option>	Muskmelon	</option>
<option>	Okra	</option>
<option>	Onion	</option>
<option>	Orange	</option>
<option>	Papaya	</option>
<option>	Pears	</option>
<option>	Peas	</option>
<option>	Pineapple	</option>
<option>	Pomegranate	</option>
<option>	Potato	</option>
<option>	Pumpkin	</option>
<option>	Sapotta	</option>
<option>	Strawberry	</option>
<option>	Watermelon	</option>

    <input type='text' placeholder='Quantity (<20kg)' name='quantity' required pattern="^0*([0-9]|1[0-9])$|^[0-1]*.[0-9]*$|^0*[0-1]*.[0-9]*$"  title='Enter a valid name!'/>
    <input type='submit' value='ADD' class='thebutton'/>
</form>  
</div>
</div>

<a href="cart.php"><div id=cartbutton><img src="images/cart.png"  width=61.5px height=61.5px></div></a>
<a href="home.php"><div id=backbutton><img src="images/back.png"  width=61.5px height=61.5px></div></a>



<!--------------------------------------------------------------------------->

<div id=footText>
     <span id=copyright>&copy;</span>2019 SANTOSH PANDEY  |  ALL RIGHTS RESERVED  |  RGG&#x2122;
</div>

<!--------------------------------------------------------------------------->
</body>
</html>
<!--------------------------------------------------------------------------->

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

.fTable::-webkit-scrollbar {
  width: 7px;
}

.fTable::-webkit-scrollbar-track {
 
  border-radius: 7px;
  background:rgb(40,40,40,0.9)
}
.fTable::-webkit-scrollbar-thumb {
  background: rgb(0,140,140,0.8);
  border-radius: 50px;
}

.vTable::-webkit-scrollbar{
    width: 7px;
}
.vTable::-webkit-scrollbar-track{
    border-radius:7px;
    background:rgb(40,40,40,0.9);
}

.vTable::-webkit-scrollbar-thumb{
    background:rgb(200,0,0,0.8);
    border-radius:50px;
    
}


.overall{
 
    position:absolute;
    width:80%;
    top:55%;
    left:50%;
    transform:translate(-50%,-50%);
    margin-top:1vw;
}



#heading{
    text-shadow:0px 0px 2px black,0px 0px 2px black,0px 0px 15px black;
    color:rgb(240,240,240);
    border-radius:20px;
    font-size:50px;
    background-color:rgb(0,0,0,0.7);
    width:fit-content;
    display:absolute;
    margin:0 auto;
    padding:6px 25px;
    font-family: impact;
    letter-spacing:1.4px;
    box-shadow:3px 3px 16px black;
    border-top:rgb(100,100,100), 0.5px solid;
    border-left:rgb(50,50,50), 0.5px solid;
    border-right:white 1px solid;
    border-bottom:white 0.5px solid;
    margin-top:2vw;
    margin-bottom:5vw;
}



#cartbutton{
    
    display:inline;;
    position:absolute;
    margin:35px auto;
    cursor: pointer;
    right:2vw;
    top:0.4vw;    
    width:60px;
    height:60px;
}

#cartbutton:active{
    transform:translateY(2px);  
    
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

.fruitTable{
    
    /* display:inline-table; */
    background-color:rgb(11,11,11,0.85);
    min-width:310px;
    color:white;
    font-size:20px;
    border:0;
    cellspacing:4px;
    border-radius:5px;
    margin:10px;
    margin-right:5px; 
    margin-top:5px;
    font-family:comfortaa;
}
.fruitTable:hover{
   box-shadow:0px 0px 10px aqua;
   background-color:rgb(0,0,0,0.9);
}
.fruitTable td {
    border:1px aqua solid;
    padding:8px;
    color:white;
    text-shadow:0px 0px 5px black;
    border-radius:5px;
}

.vegTable{
 /* display:inline-table;    */
 min-width:310px;
 background-color:rgb(11,11,11,0.85);
 color:white;
 font-size:20px;
 border:0;
 border-radius:5px;
 text-shadow:0px 0px 5px black;
 font-family:comfortaa;
 margin:10px;
 margin-right:5px;
 margin-top:5px;
    
}
.vegTable:hover{
   box-shadow:0px 0px 10px red;
   background-color:rgb(0,0,0,0.9);
}
.vegTable td {
 border:1px red solid;
 padding:8px;
 color:white;
 border-radius:5px;
}

/*basic styling of signup box*/
.machinebox{
    position:absolute;
    top:50%;
    right:0;
    margin-right:10px;
    transform:translatey(-50%);
}

.box{
  
    background-color: rgba(0, 0, 0);
    padding:16px 15px;
    border-radius:20px;
    box-shadow: 0px 0px 9px black;
    width:270px;
    padding:23px 15px;   
    height:217px;
}
/*the login box hover effect*/
.box:hover{
    transition:.8s;
    box-shadow: 0px 0px 38px rgb(255, 136, 0);
}



/*customizing the styling of text input box!*/
.box input[type = 'text'] {
    display: flex;
    flex-direction: column;
    color:rgb(255, 166, 0);
    padding:1.5px 10px;
    font-size: 30px;
    border-radius:15px;
    background-color:rgb(0,0,0,0);
    width:230px;
    height:55px;
    border:3px solid rgb(255, 166, 0);
    margin:0 auto;
    margin-top:13px;
}

select{
    display: flex;
    flex-direction: column;
    color:rgb(255, 166, 0);
    padding:1.5px 10px;
    font-size: 30px;
    border-radius:16px;
    background-color:rgb(0,0,0);
    width:255px;
    height:60px;
    border:3px solid rgb(255, 166, 0);
    margin:0 auto;
    padding-top:0.5vw;
    margin-top:3px;
}


/*customizing the styling of submit buttons!*/
.box input[type = 'submit'] {
 
    text-align: center;
    font-weight: 900;
    font-family: arial;
    color:rgb(255, 255, 255);
    border:3px solid rgb(255, 166, 0);
    border-bottom:0;
    font-size: 30px;
    border-radius:45px;
    background-color:rgb(0,0,0,0);
    padding:3px;
    padding-bottom:6px;
    cursor: pointer;
    width:8vw;
    box-shadow:0px 5px 1px rgb(156, 3, 3);
    border-left: 0;
    border-right:0;
    margin:1vw auto;
    left:50%;
    position:absolute;
    transform:translatex(-50%);
 }



/*customizing the hover action on submit*/
.box input[type = 'submit']:hover{
    border:3px solid rgbrgb(255, 166, 0);
    transition:2s background-color;
    transition:.2s color;
    background-color: rgb(255, 166, 0);
    color:black;
    text-shadow:1px 1px 2px red;
}


 .box input[type = 'submit']:active{
        transform:translate(-50%,2px);
        box-shadow:0px 3px 1px rgb(156, 3, 3);
    
  }

a:active{
    text-decoration:none;
}
a:visited{
    text-decoration:none;
}


input:focus, textarea:focus, select:focus{
        outline: none;  
}

.fTable{
    height:490px;
    overflow-y:auto;
    width = 310px;
    display:inline-block;
}
.vTable{

    display:inline-block;
    height:490px;
    overflow-y:auto;
    width = 310px;
    margin-left:3vw;
    
}

.box::-webkit-scrollbar{
   width:1px;
}


/*This is the footer...which contains information about the author and copywright info*/
#footText {
    position:fixed;
    bottom:0;
    left:0;
    right:0;
    color:white;
    background-image: linear-gradient(to right,rgb(0,0,0,.5),rgb(0,0,0,.2),rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.6),rgb( 0, 0,0,0.6),rgb(0,0,0,.2),rgb(0,0,0,.5));
    font-family: xiaowei;
    text-align: center;
    font-size: 14px;
    letter-spacing: 7px;
    padding: 2px;
    margin: 0 4px;
    border-radius: 10px;
    text-shadow:0px 0px 50px black;
}
#copyright{
    font-size: 18px;
    vertical-align: -.75px;
    text-shadow:0px 0px 10px black;
 }

</style>