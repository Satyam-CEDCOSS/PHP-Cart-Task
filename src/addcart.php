<?php
// ADD TO CART FUNCTION 
session_start();
$val=$_GET["prod"];
$_SESSION["product"][$val]++;
header("Location: ./products.php");
?>