<!DOCTYPE html> 
<html>
        <head>
                <meta name="viewport" content="width=device-width, intital-scale=1.0, user-scalable=yes">
                <meta charset="utf-8"> <!--setting the character set as universal utf-8 format-->
                <link rel="icon" href="favicon.ico" type="image/x-icon"> <!--importing the title icon -->
                <link rel="stylesheet" href="loginStyles.css"> <!--connecting the css file-->
                <!--title to be displayed as tab name-->
                <title>Log In - Russian Green Grocers </title> 
        </head>
        <body>
        <div class=master>
        <div id = 'welcomeNote'>
                        WELCOME TO THE RUSSIAN GREEN GROCERS<sup>&#9400;</sup>
                </div>

                <div id = 'storeDescription'>
                                <strong>
                                        <marquee scrollamount=10> 
                                                A store with neutralized prices among all branches in the entire country.
                                        </marquee>  
                                </strong>
                </div>
                <hr>
                <div class=fullcontent> 
               
                <div id=heading>
                        USER LOGIN
                </div>
              
                <div class=userPic>
                       <img src="images/userPic.png" width=140px height=140px>
                </div>
                <div class='form'>       
                <form class='box' action='loginProcessing.php' method='post'>
                        <input type='text' placeholder='Email' name='cEmail' required pattern="[a-zA-Z0-9._]+@[a-zA-Z0-9.]+\.[a-zA-Z]{2,4}$" title='Enter a valid email address!'/>
                        <input type='password' placeholder='Password' name = 'cPassword' required pattern=".{6,15}" title="Enter a valid password!"/>
                        <input type='submit' class='thebutton' value='LOG IN'>
                        <a href="signup.php" class='backbuttonlogin'><div id='signupbutton' class='thebutton'>SIGN UP</div></a>
                </form>
                </div>
                </div>
</div>
                <div id=footText>
                                       <span id=copyright>&copy;</span>2019 SANTOSH PANDEY  |  ALL RIGHTS RESERVED  |  RGG&#x2122;
                        </div>

        </body>
</html>