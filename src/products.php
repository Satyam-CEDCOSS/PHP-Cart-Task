<?php
session_start();
if (!isset($_SESSION["product"])){
	$_SESSION["product"]=array();
}
include 'config.php';
?>
<!DOCTYPE html>
<html>

<head>
	<title>
		Products
	</title>
	<link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
	<!-- DYNAMIC ITEM LIST -->
	<?php include 'header.php';?>
	<div id="main">
		<div id="products">
			<?php
			foreach($data as $id => $details){
				echo "<div id='product-$id' class='product'>
						  <img src='./images/$details[image]'>
						<h3 class='title'><a href='#'>Product $details[id]</a></h3>
						<span>Price: $$details[price]</span>
						<a class='add-to-cart' href='./addcart.php?prod=$id'>Add To Cart</a>
					</div>";
			}?>
		</div>
	</div>
	<?php
	include 'product_table.php';
	?>
	<?php include 'footer.php';?>

</body>

</html>