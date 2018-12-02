
<html>
    <head>
        <title>Price of all products</title>
    </head>
    <?php
	include "header.php";
	?>
    <body>
        <table>
        <a href = "http://localhost:8080/3241_pj/changePrice.php">Edit</a>
        <thead>
            <tr>
                <td>Product id</td>
                <td>Base price($)</td>
				<td>Current price($)</td>
				<td>Description</td>
                <td>Inventory quantity</td>
				<td>Product type</td>
				<td>Price history</td>
            </tr>
        </thead>
        <tbody>
        	<br>
        	<br>
        	<?php
        	$con = mysqli_connect('localhost','root','990622$Grow','3241_pj');
			If (!$con)
			{ die('Could not connect'.mysqli_connect_error());
			}
			$pt = "select * from product_type";
			$ph = "select * from pricehis";
			$result_pt = mysqli_query($con, $pt) or die(mysqli_error($con));
            $result_ph = mysqli_query($con, $ph) or die(mysqli_error($con));
            while($row = mysqli_fetch_array($result_pt, MYSQLI_ASSOC)) {
            	echo <<<Rows
                <tr>
                    <td>$row[Product_type_id]</td>
		            <td>$row[Base_price]</td>
					<td>$row[Current_price]</td>
					<td>$row[Description]</td>
		            <td>$row[Inventory_quantity]</td>
					<td>$row[Prod_type]</td>
					<td>Price history</td>
                </tr>
Rows;
			}
			?>
        </tbody>
        </table>
    </body>
</html>
