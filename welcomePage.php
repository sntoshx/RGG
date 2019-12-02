<?php
$conn=mysqli_connect("localhost","root","","russianggdb");
$cName = $_POST['cName'];
$cGender = $_POST['cGender'];
$cEmail = $_POST['cEmail'];
$cCity = $_POST['cCity'];
$cPassword=$_POST['cPassword'];
$cPassEncrypted=MD5($cPassword);
?>
<?php
$sql= "SELECT email from customer where email = '$cEmail'";
$result=mysqli_query($conn,$sql);
if($result->num_rows>0)
{
    echo '<script>alert("User is already registered.\nPress OK to go back to sign up page.");
    window.location = "signup.php";</script>';
}
else
{
    $sql = "INSERT INTO customer (CName,Gender,Email,City,CPassword) VALUES ('$cName','$cGender','$cEmail','$cCity','$cPassEncrypted')";
    $result = mysqli_query($conn,$sql);   
        session_start();
        $sql = "SELECT CName from customer where email='$cEmail'";
        $result = mysqli_query($conn,$sql);
        while($row = $result->fetch_assoc())
        {
            $_SESSION['CName'] = $row['CName'];
        } 
        
        $sql = "SELECT id from customer where email='$cEmail'";
        $result = mysqli_query($conn,$sql);
        while($row = $result->fetch_assoc())
        {
            $_SESSION['CID'] = $row['id'];
        }
    

    
        $sql = "SELECT Gender from customer where email='$cEmail'";
        $result = mysqli_query($conn,$sql);
        while($row = $result->fetch_assoc())
        {
            $_SESSION['cGender'] = $row['Gender'];
        }

    
        $sql = "SELECT email from customer where email='$cEmail'";
        $result = mysqli_query($conn,$sql);
        while($row = $result->fetch_assoc())
        {
            $_SESSION['CEmail'] = $row['email'];
        }
    
        $sql = "SELECT City from customer where email='$cEmail'";
        $result = mysqli_query($conn,$sql);
        while($row = $result->fetch_assoc())
        {
            $_SESSION['CCity'] = $row['City'];
        }  
   
}

?>
<!DOCTYPE html> 
<html>
        <head>
                <meta name="viewport" content="width=device-width, intital-scale=1.0, user-scalable=yes">
                <meta charset="utf-8"> <!--setting the character set as universal utf-8 format-->
                <link rel="shortcut icon" href="favicon.ico"> <!--importing the title icon -->
                <link rel="stylesheet" href="welcomePage.css"> <!--connecting the css file-->
                <!--title to be displayed as tab name
                title is actually dynamic here...we are using php script to include the name from the form in title -->
                <title>Welcome <?php 
                                if(strcasecmp($cGender,"male")==0) {
                                    echo "Mr. ";
                                    echo ucwords($cName);}
                                else if(strcasecmp($cGender,"female")==0) {
                                echo "Ms. ";    
                                echo ucwords($cName);}
                                else 
                                    echo ucwords($cName);
                                ?> </title> 
                <!--the above php script capitalizes the dynamic title and welcomes the user ;) -->
                            
        </head>

        <!--the real body starts here...no php scripting down here..may be ..very little ;) -->
        <body>
    
        
                <div class='centered'>
                    <div id='message'>
                    Thanks for signing up, <?php 
                                if(strcasecmp($cGender,"male")==0) {
                                    echo "Mr. ";
                                    echo ucwords($cName);}
                                else if(strcasecmp($cGender,"female")==0) {
                                echo "Ms. ";    
                                echo ucwords($cName);}
                                else 
                                    echo ucwords($cName);
                                ?> !</br>Go, visit your home page for shopping.
                    </div>
                    <a href = "home.php" class='cont'>
                   <div id = 'continueButton'>

                                    HOME PAGE

                   </div>                    
                    </a>


                </div>                    

                <div id=footText>
                    <span id=copyright>&copy;</span>2019 SANTOSH PANDEY  |  ALL RIGHTS RESERVED  |  RGG&#x2122;
                </div>

               
        
        </body>
</html>
