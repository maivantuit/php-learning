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
	
	<style>
		table, th, td {
			border: 1px solid black;
			padding: 10px;
		}
		.title {
			color: red;
		}
		a {
			display: block;
		}
	</style>
</head>
<?php
	$server = $_SERVER['SERVER_NAME'];
	$user = "root";
	$pass = "";
	$data = "shop";
	
	$con = @mysqli_connect($server, $user, $pass, $data);
	
?>
<?php 
	if(isset($_POST['nhomsp'])){
		$id = $_POST['nhomsp'];
		$sql = "insert into product(categoryID, productName, Price) values({$id},'". $_POST['tensp']."', {$_POST['giasp']})";
		mysqli_query($con, "set names 'utf8'");
		@mysqli_query($con, $sql);
		header("location:cau2.php?id={$id}");
	}
?>
<body>
	<div class="container">
		<table class="table table-responsive">
			<tr>
				<th class="title">Nhóm Sản Phẩm</th>
				<th class="title">Danh Sách Sản Phẩm</th>
			</tr>
			<tr>
				<td>
					<?php //tạo danh mục sản phẩm
						if($con) {
							$sql = "select *
									from category";
							
							$rs = @mysqli_query($con, $sql);
							if($rs) {
								$str="";
								while($cursor = mysqli_fetch_array($rs)){
									$str.="<a href='cau2.php?id={$cursor['categoryID']}'>{$cursor['categoryName']}</a>";
								}
								echo $str;
								mysqli_free_result($rs);
							}
						}
					?>
				</td>
				<td>
					<table class="table table-responsive">
						<tr style="background: orange">
							<th>STT</th>
							<th>Tên SP</th>
							<th>Giá Sản Phẩm</th>
							<th>Thao Tác</th>
						</tr>
						<?php //đổ dữ liệu sản phẩm sử dụng GET
						if(isset($_GET['id'])){
							$stt=1;
							$id=$_GET['id'];
							$sql = "select productName, price 
									from product 
									where categoryID ='". $id ."'";
							$rs = @mysqli_query($con, $sql);
							if($rs) {
								$str="";
								while($cursor = mysqli_fetch_array($rs)){
									$str.="<tr>
											<td>{$stt}</td>
											<td>{$cursor['productName']}</td>
											<td>{$cursor['price']}</td>
											<td>Delete</td>
											</tr>";
											$stt++;
								}
								echo $str;
								mysqli_free_result($rs);
							}
						}
						?>
					</table>
					<a class="btn btn-success" style="float: right" href="cau3.php">
						Tạo mới
					</a>
				</td>
			</tr>
		</table>

	</div>
</body>
</html>