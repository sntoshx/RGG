<?php
$conn=mysqli_connect("localhost","root","","russianggdb");
$cEmail = $_POST['cEmail'];
$cPassword=$_POST['cPassword'];
$cPassEncrypted=MD5($cPassword);
?>

<?php

mysqli_query($conn,"delete from cart where 1");

$sql = "SELECT email,CPassword from customer where email='$cEmail' and CPassword='$cPassEncrypted'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
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


    $sql = "SELECT CName from customer where email='$cEmail'";
    $result = mysqli_query($conn,$sql);
    while($row = $result->fetch_assoc())
    {
        $_SESSION['CName'] = $row['CName'];
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


    $sql = "SELECT Pin from customer where email='$cEmail'";


    header("location:home.php");
}
else
{   
  echo '<script>alert("The username or password you entered is incorrect. Please try again!");
  window.location = "login.php";</script>';

}
?>