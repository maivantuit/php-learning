<?php
//require 'ketnoi.php'
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.content{
    width: 1000px;
    height : 300px;
    border : black solid 2px;

}
.left{
    width: 200px;
    height : 300px;
    float : left;
    border-right : black solid 2px;
}
.right{
    margin-top: 30px;
    height : 300px;
    float : right;
    margin-right : 200px;
   
}
.right table {
     border-collapse: collapse; 
}
</style>
</head>
<body>
<div class="content">
<div class="left">
<table >
    <tr align="center">
        <td>STT</td>
        <td>Tên sản phẩm</td>
    </tr>
    <?php
//       $results = $mysqli->query("SELECT STT, Tensanpham FROM sanpham");

   //    while($row = $results->fetch_assoc())
        {
    ?>
            <tr align="center">
                <td>
                    <?php echo $row['STT']; ?>
                </td>
                <td>
                    <a href='danhsach2.php?MA=". $row["STT"] . "'> <?php echo $row['Tensanpham']; ?></a>
                </td>
			</tr>
			   <?php } ?>
</table>
</div>
<div class="right">
<table  border="1" width="500px" >
    <tr align="center">
        <td>STT</td>
        <td>Mã sản phẩm</td>
        <td>Tên sản phẩm</td>
        <td>Mã khách hàng</td>
		<td>Giá</td>
        <td colspan="2">Xóa</a></td>
    </tr>
    <?php
       $results = $mysqli->query("SELECT STT, Masanpham, Tensanpham,Makhachhang, Gia FROM danhsach");

       while($row = $results->fetch_assoc())
        {
    ?>
            <tr align="center">
                <td>
                    <?php echo $row['STT']; ?>
                </td>
                <td>
                    <?php echo $row['Masanpham']; ?>
                </td>
                 <td>
                    <?php echo $row['Tensanpham']; ?>
                </td>
                 <td>
                    <?php echo $row['Makhachhang']; ?>
                </td>
                  <td>
                    <?php echo $row['Gia']; ?>
                </td>
      
                <td>
                    <a href='xoa.php"'> Delete </a>
                </td>
            </tr>
    <?php } ?>
</table>
</div>
</div>
</body>
</html>