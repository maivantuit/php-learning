<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<table>
			<tr>
				<th>Category Name</th>
				<th>Product Name</th>
				<th>list Price</th>
			</tr>
			<?php
				$server = $_SERVER['SERVER_NAME'];
				$user = "root";
				$pass = "";
				$data = "shop";
				
				$con = @mysqli_connect($server, $user, $pass, $data);
				if($con) {
					$sql = "select categoryName, productName, price 
							from category, product 
							where category.categoryID = product.categoryID";
					//mysqli_query($con,"set names'utf8'");
					$rs = @mysqli_query($con, $sql);
					if($rs) {
						$str="";
						while($cursor = mysqli_fetch_array($rs)){
							$str.="<tr>
									<td>{$cursor['categoryName']}</td>
									<td>{$cursor['productName']}</td>
									<td>{$cursor['price']}</td>
									</tr>";
						}
						echo $str;
						mysqli_free_result($rs);
						mysqli_close($con);
					}
				}
			?>
		</table>
	</div>
</body>
</html>