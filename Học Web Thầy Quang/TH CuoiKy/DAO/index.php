<?php
    include ("database.class");
    $dao = new DAO("root","","qlhh");
    $dao->table1("select orderdetails.icode,iname,rate,qty,rate*qty
        as amount from orderdetails,item where orderno= 001 and orderdetails.icode=
            item.icode","Chi tiết đơn hàng 001" );
    echo "<hr>";
    $dao->table2("select item.icode,item.iname,rate,qty from orderdetails,item where item.icode='I01' and orderdetails.icode = item.icode","Chi tiết bán hàng I01");
?>

