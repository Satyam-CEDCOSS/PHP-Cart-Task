<?php
session_start();
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <footer>
    <div class="footer__box">
			<h1>Product Table</h1>
			<!-- main table  -->
			<div class="footer__table">
				<table>
					<thead>
						<tr>
							<th>Product Image</th>
							<th>Product Name</th>
							<th>Quantity</th>
							<th>Total Price</th>
							<th>Buttons</th>
						</tr>
					</thead>
                    <!-- table body  -->
					<tbody id="table_body">
                        <?php
                        $total = 0;
                        foreach ($_SESSION["product"] as $key => $value) {
                        $total +=  $_SESSION["product"][$key]*$data[$key]["price"];
                        echo "<tr><td><img src='./images/";
                        echo($data[$key]["image"]);
                        echo"' width='100' height='100'>";echo"</td><td>";echo($data[$key]["name"]);echo"</td><td>";echo $_SESSION["product"][$key];echo"</td><td>";echo $_SESSION["product"][$key]*$data[$key]["price"];echo"</td><td><a class='add-to-cart' href='./delete.php?key=$key'>X</a></td></tr>";
                        }
                        ?>
                    </tbody>
                    <!-- table foot  -->
					<tfoot id="table_foot">
                        <?php
                        echo "<tr><td></td><td></td><td></td><td>Total: $total</td><td></td></tr>"
                        ?>
                    </tfoot>
				</table>
			</div>
		</div>
    </footer>
</body>
</html>