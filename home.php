<?php
session_start();
if($_SESSION['CName']==NULL)
header("location:index.php")
?>


<!DOCTYPE html> 
<html>
        <head>
                <meta name="viewport" content="width=device-width, intital-scale=1.0, user-scalable=yes">
                <meta charset="utf-8"> <!--setting the character set as universal utf-8 format-->
                <link rel="shortcut icon" href="favicon.ico"> <!--importing the title icon -->
                <link rel="stylesheet" href="home.css"> <!--connecting the css file-->
                <!--title to be displayed as tab name
                title is actually dynamic here...we are using php script to include the name from the form in title -->
                <title>RGG - Home Page </title> 
        </head>
        <body>
                <!-- <div id = 'homeHeading'>
                        RUSSIAN GREEN GROCERS <span class=emoji>&#129321;</span> -->
                </div>

                <div id=menu>
                <table align=center width=99.6% height=20px>
                <tr>
                <td width=20% align=left>HEY, <?php echo strtoupper($_SESSION['CName'])?>!</td>
                <td ID=title> RUSSIAN GREEN GROCERS<sup>&#x2122;</sup></TD>
                <td width=15% align=right><a href= "logout.php" class=logout>LOG OUT</a> </td>
                </tr>
                </table>
                </div>
                <div class="homePanel">


                <div id ='myDetails' class='panelItems'>
                <a href="userDetails.php" class='optionLinks'>
                  <div class=options id=first>
                  SEE YOUR DETAILS


                  </div>
                  </a>
                
                </div>

                <div id ='list' class='panelItems'>
                <a href="list.php" class='optionLinks'>
                <div class=options id=third>
                SEE WHAT WE OWN                        

                        </div>
                        </a>
                
                </div>




        
                <div id ='update' class='panelItems'>
                <a href="shopping.php" class='optionLinks'>
                <div class=options id=second>
                START SHOPPING

                        </div>
                        </a>
                </div>

                

                <div id ='cart' class='panelItems'>
                <a href="cart.php" class='optionLinks'>
                <div class=options id=fourth>
                       SHOPPING CART

                        </div>
                        </a>
                </div>
                
                </div>
                
                <div id=footText>
                        <span id=copyright>&copy;</span>2019 SANTOSH PANDEY  |  ALL RIGHTS RESERVED  |  RGG&#x2122;
                </div>

                        
        </body>
</html>
