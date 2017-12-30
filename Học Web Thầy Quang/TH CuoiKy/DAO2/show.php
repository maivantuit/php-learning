<?php
	include("database.class");
	$dao=new Dao("root",'',"qlhh");
	//$sql= " select * from orderdetails where orderno = '001' ";
    $sql="select item.* , qty as SốLượng from item inner join orderdetails on item.icode=orderdetails.icode where orderdetails.icode='I01'";
	$header="Chi tiết bán hàng I01";
	$dao->table($sql,$header,"SốLượng");
?>