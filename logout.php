<?php
session_start();
session_unset();
$conn=mysqli_connect("localhost","root","","russianggdb");
$query="delete from cart where 1";
mysqli_query($conn,$query);

echo '<script>window.location="index.php"</script>';
?>