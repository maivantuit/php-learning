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
		#insert {
			border: 1px solid #ddd;
			border-radius: 4px;

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
<body>
	<div class="container">
		
		<div class="row">
			<form action="cau2.php" method="POST">
				<div id="insert" class="col-xs-5">
					<div class="row form-group">
						<div class="col-xs-12" style="padding: 5px; font-weight: bold; font-size: 2rem; text-align: center;">
							Thêm Sản phẩm
						</div>
					</div>

					<div class="row form-group">
						<div class="col-xs-4">Tên sản phẩm</div>
						<div class="col-xs-8">
							<input type="text" class="form-control" name="tensp">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-xs-4">Giá SP</div>
						<div class="col-xs-8">
							<input type="text" class="form-control" name="giasp">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-xs-4">Nhóm Sản Phẩm</div>
						<div class="col-xs-8">
							<select name="nhomsp" class="form-control">
								<?php
								$sql = "select *
										from category";
								
								$rs = @mysqli_query($con, $sql);
								if($rs) {
									$str="";
									while($cursor = mysqli_fetch_array($rs)){
										$str.="<option value='{$cursor['categoryID']}'>{$cursor['categoryName']}</option>";
									}
									echo $str;
									mysqli_free_result($rs);
									
									//mysqli_close($con);
								}	
								?>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12" style="text-align: right; padding-bottom: 10px">
							<a href="cau2.php" class="btn btn-default">Quay lại</a>
							<input type="submit" class="btn btn-success" value="Thêm">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>