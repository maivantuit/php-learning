
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            function hoan_vi(&$a,&$b){
                $tam= $a;
                $a=$b;
                $b=$tam;
            }
            function sap_tang($mang){
                $n=count($mang);
                for($i=0;i<$n-1;$i++){
                    for($j=$i;$j<$n;$j++){
                        if($mang[$i]>$mang[$j]){
                            hoan_vi($mang[$i], $mang[$j]);
                        }
                    }
                }
                return $mang;
                    
            }
            function sap_giam($mang){
                $n=count($mang);
                for($i=0;i<$n-1;$i++){
                    for($j=$i;$j<$n;$j++){
                        if($mang[$i]<$mang[$j]){
                            hoan_vi($mang[$i], $mang[$j]);
                        }
                }}
                
                return $mang;
                    
            }
            if(isset($_POST["day_so"])){
                $day_so = trim($_POST["day_so"]);
                $mang = explode(",", $day_so);
                $mang1 = sap_tang($mang);
                $chuoi_tang= implode(",", $mang1);
                
                $mang2 = sap_giam($mang);
                $chuoi_giam= implode(",", $mang2);
            }
            
        ?>
        <form id="form1" name="form1" method="post" action="Sapxepmang.php">
            <table width="450" border="0" align="center" cellpadding="2" cellsacing="2" bgcolor="#D1DED4">
                <tr align="center" bgcolor="#339999">
                    <td colspan="2" bgcolor="#339999"><span class="style7">SẮP XẾP MẢNG</span></td>
                </tr>
                <tr>
                    <td width="14" class="style5">&nbsp;NHẬP MẢNG:</td>
                    <td width="295" class="style5">                
                        <input name="day_so" type="text" id="day_so" value="<?php echo $_POST["day_so"]; ?>" size="37" />
                        <span class="style8">(*)</span>
                    </td>
                </tr>
                <tr>
                    <td class="style5"><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                    <td><input type="submit" name="Submit" value="Sap xep tang/giam" style="background: #FFFFFF" border="1"/></td>
                </tr>
                <tr>
                    <td bgcolor="#CCE6E6" class="style5">&nbsp;<span class="style8">Sau khi sap xep:</span></td>
                    <td bgcolor="#CCE6E6" class="style5">&nbsp;</td>
                </tr>
                <tr>
                    <td bgcolor="#CCE6E6" class="style5">&nbsp;Tang dan:</td>
                    <td bgcolor="#CCE6E6" class="style5"><input name="day_so2" type="text" id="day_so2" value="<?php echo $chuoi_tang; ?>"
                                                                size="37" readonly="true" style="background: #CCFFFF"/></td>
                </tr>
                <tr>
                    <td bgcolor="#CCE6E6" class="style5">&nbsp;Giam dan</td>
                    <td bgcolor="#CCE6E6" class="style5"><input name="day_so22" type="text" id="day_so22" value="<?php echo $chuoi_giam; ?>"
                                                                size="37" readonly="true" style="background: #CCFFFF"/></td>

                </tr>
                <tr>
                    <td colspan="2" class="style5" align="cennter"><span class="style8">(*)</span>Cac so duoc nhap cach nhau bang dau &quot;,&quot;</td>
                </tr>
            </table>

        </form>
    </body>
</html>
