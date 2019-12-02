<?php
session_start();
if($_SESSION['CName']==NULL)
header("location:index.php")
?>


<?php
$conn=mysqli_connect("localhost","root","","russianggdb");
$productName=$_POST['productName'];
$quantity=$_POST['quantity']; //quantity variable (from user input)

if($quantity==0)
{
    $query="delete from cart where Prod_Name='$productName'";
    $result=mysqli_query($conn,$query);
}
else{

$query="select Prod_ID from products where Prod_Name='$productName'";
$result=mysqli_query($conn,$query);
while($row = $result->fetch_assoc())
{
$Product_ID = $row['Prod_ID']; //product_id (from sql database)
}



$query="select Prod_Price from products where Prod_Name='$productName'";
$result=mysqli_query($conn,$query);
while($row = $result->fetch_assoc())
{
$Product_Price = $row['Prod_Price']; //product_price (from sql database)
}

$Cum_Price = ($Product_Price) * ($quantity); //calculating cumulative price quantity * price 


$query="select Prod_Name from cart where Prod_Name = '$productName'";
$result=mysqli_query($conn,$query);

if((mysqli_num_rows($result)))
{
    $query="UPDATE cart set Prod_Quantity='$quantity',Cum_Price='$Cum_Price' where Prod_Name = '$productName'";
    mysqli_query($conn,$query);
 
}
else{
    $query="INSERT INTO cart (Prod_ID,Prod_Name,Prod_Price,Prod_Quantity,Cum_Price) VALUES ('$Product_ID','$productName','$Product_Price','$quantity','$Cum_Price')";
    mysqli_query($conn,$query);

}
}
header("location:shopping.php");


?>