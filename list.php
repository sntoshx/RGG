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
        <title>Price List</title>
    </head>
    <body>
    <div id = 'heading'>
    RATE CHART
    </div>
    <div class=thetables>
    <div class=tablefruit>
    <?php 
    echo'
    <table class = "fruitTable" cellspacing=6>
    <tr>
    <td><font color=#abfff8>Fruit Name </font></td>
    <td><font color=#abfff8> Price (&#x20B9;/kg) </font></td>
    </tr>';
    $query=mysqli_query($conn,"select Fruit_Name, Fruit_Price from fruits");
    $rowcount=mysqli_num_rows($query);
        for($i=0;$i<$rowcount;$i++)
        {
            $row=mysqli_fetch_assoc($query);
    echo'
            <tr><td>'. $row["Fruit_Name"]. '</td>
    <td align=right>'. $row["Fruit_Price"].'</td></tr>';
        }   

    echo'
    </table>';
    ?>
    </div>

    <div class=tableveg>

    <?php
    echo '<table class = "vegTable" cellspacing=6>
    <tr>
    <td><font color=#FDC8C8>Veggie Name</font></td><td><font color=#FDC8C8>Price (&#x20B9;/kg)</font></td>
    </tr>';
    $query=mysqli_query($conn,"select Veg_Name, Veg_Price from vegetables");
    $rowcount=mysqli_num_rows($query);

    for($i=0;$i<$rowcount;$i++)
    {
        $row=mysqli_fetch_assoc($query);
        echo '<tr>
        <td>'.$row['Veg_Name'].'</td><td align=right>'.$row['Veg_Price'].'</td></tr>';
    }
    echo '</table>';
    mysqli_close($conn);
    ?>
    </div>
    </div>

    <!-- <a href='home.php' class="back"> <div id="backbutton"> BACK </div> </a> -->
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
        background-image: url("background-images/green-bg.jpg");
        background-size: 120vmax;
        background-attachment: fixed;
    
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
        padding:15px 25px;
        font-family: impact;
        letter-spacing:1.4px;
        box-shadow:3px 3px 16px black;
        border-top:rgb(100,100,100), 0.5px solid;
        border-left:rgb(50,50,50), 0.5px solid;
        border-right:white 1px solid;
        border-bottom:white 0.5px solid;
        margin-top:2vw;
        margin-bottom:3vw;

    }

    .thetables{
        position:absolute;
        width:fit-content;
        top:55%;
        left:50%;
        transform:translate(-50%,-50%);
    }

    .tablefruit{
        position:relative;
        height:60vh;
        overflow-y:auto;
        display:inline-block;
    }

    .tableveg{
        position:relative;  
        display:inline-block;
        height:60vh;
        overflow-y:auto;
        
    }

    .tablefruit::-webkit-scrollbar{
        width:15px;
    }

    .tablefruit::-webkit-scrollbar-thumb{
        background-color:#00969e;
        border-radius:30px;
        

    }
    .tablefruit::-webkit-scrollbar-track{
        background-color:rgb(0,0,0);
        border-radius:30px;
        
    }
    .tableveg::-webkit-scrollbar{
        width:15px;
    }

    .tableveg::-webkit-scrollbar-thumb{
        background-color:#a30a0a;
        border-radius:30px;
        

    }
    .tableveg::-webkit-scrollbar-track{
        background-color:black;
        border-radius:30px;
        
    }

    .fruitTable{
        font-weight:700;
        background-color:rgb(11,11,11,0.86);
        color:white;
        font-size:35px;
        border:0;
        cellspacing:4px;
        border-radius:7px;
        font-family:comfortaa;
        margin:1vw;
        margin-top:0;
    }
    .fruitTable:hover{
    box-shadow:0px 0px 20px aqua;
    background-color:rgb(0,0,0,0.9);
    }
    .fruitTable td {
        border:2px aqua solid;
        padding:12px;
        color:white;
        text-shadow:0px 0px 5px black;
        border-radius:6px;
    }

    .vegTable{
    font-weight:700;
    background-color:rgb(11,11,11,0.86);
    color:white;
    font-size:35px;
    border:0;
    cellspacing:4px;
    border-radius:7px;
    text-shadow:0px 0px 5px black;
    font-family:comfortaa;
    margin:1vw;
    margin-top:0;
    }
    .vegTable:hover{
    box-shadow:0px 0px 20px red;
    background-color:rgb(0,0,0,0.9);
    }
    .vegTable td {
    border:2px rgb(255,0,0) solid;
    padding:12px;
    color:white;
    border-radius:6px;
    }


    #backbutton{
        
        display:inline;
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