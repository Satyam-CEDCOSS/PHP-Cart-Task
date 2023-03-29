<?php
//DELETE FUNCTION
session_start();
$del=$_GET["key"];
unset($_SESSION["product"][$del]);
header("Location: ./products.php");
?>