<?php
    mysql_connect('localhost:8080','root','');//ket noi database
    mysql_select_db('demoketnoi');//lua chon database


?>
<?php
    $sqll=mysql_query('select * from demoketnoi');
    while($value=mysql_fetch_array($sql)){
        echo $value['username'];
    }

?>