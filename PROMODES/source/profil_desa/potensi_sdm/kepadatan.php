<?php
$tahun = $_GET['tahun'];
$s = mysql_query("select * from tbinput_sdm where idkat = '1' and tahun ='$tahun'");
$r = mysql_num_rows($s);
if($r == 0){
    echo "";
}
else{
    $d = mysql_fetch_array($s);
    
    echo "<table class='purple' border='1'>
            <tr>
                <th colspan='2'>KEPADATAN</th>
            </tr>";
    $s1 = mysql_query("select * from tbkepadatan order by posisi asc");
    while($d1 = mysql_fetch_array($s1)){
        $_s1 = mysql_query("select * from tbinput_sdm where idkat = '1' and idsub = '$d1[id]' and tahun = '$tahun'");
        $_r1 = mysql_num_rows($_s1);
        $_d1 = mysql_fetch_array($_s1);
        
        if($_r1 != 0 && $_d1['nilai'] != ""){
            echo "<tr>
                    <td>$d1[nama]</td>
                    <td align=right>$_d1[nilai] Orang</td>
                </tr>"; 
        }
    }
    echo "</table>";
}
?>