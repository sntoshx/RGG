<!DOCTYPE html> 
<html>
        <head>
                <meta name="viewport" content="width=device-width, intital-scale=1.0, user-scalable=yes">
                <meta charset="utf-8"> <!--setting the character set as universal utf-8 format-->
                <link rel="icon" href="favicon.ico" type="image/x-icon"> <!--importing the title icon -->
                <link rel="stylesheet" href="signupStyles.css"> <!--connecting the css file-->
                <!--title to be displayed as tab name-->
                <title>Sign Up - Russian Green Grocers </title> 
        </head>
        <body>
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
                <div class=centering>
                <div id=heading>
                        CREATE AN ACCOUNT
                </div>
                
                <div>
                <form class='box' action='welcomePage.php' method='post'>
                        <input type='text' placeholder='Name (e.g. Utkarsh Sharma)' name='cName' required pattern="[a-zA-Z\s.]+"  title='Enter a valid name!'/>
                        <input type='text' placeholder='Email (e.g. abcd@example.com)' name='cEmail' required pattern="^[a-zA-Z][a-zA-Z0-9._]+@[a-zA-Z0-9.]+\.[a-zA-Z]{2,4}$" title='Enter a valid email address!'/>    
                        <input type='text' placeholder='City (e.g. Bangalore)' name='cCity' required pattern="[a-zA-Z\s.]+"  title='Enter a valid city!'/>
                        <input type='text' placeholder='Gender (e.g. Male/Female/Other)' name='cGender' required pattern="^(m|M)(a|A)(l|L)(e|E)$|^(f|F)(e|E)(m|M)(a|A)(l|L)(e|E)$|^(o|O)(t|T)(h|H)(e|E)(r|R)$" title='Enter a valid gender!'/>
                        <input type='password' placeholder='Password' name=cPassword required pattern=".{6,15}" title="Enter a valid password!"/>
                        <input type='submit' value='SIGN UP' class='thebutton'/>
                        <a href="login.php" class='backbuttonlogin'><div id='loginbutton' class='thebutton'>LOG IN</div></a>
                </form>  
                </div>
                </div>
                <div id=footText>
                                       <span id=copyright>&copy;</span>2019 SANTOSH PANDEY  |  ALL RIGHTS RESERVED  |  RGG&#x2122;
                        </div>

        </body>
</html>