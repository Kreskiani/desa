<?php
include "../../../../config/koneksi.php";
$tahun = $_GET['tahun'];
$bulan = date('M');
$s = mysql_query("select * from tbinput_sda where idkat='7' and tahun ='$tahun'");
$r = mysql_num_rows($s);
if($r == 0){
    echo "Tidak ada data pada tahun ini.";
}
else{
    $d = mysql_fetch_array($s);
    echo "<div align='right'><input type='reset' onclick='window.location=\"?mod=salin&bulan=$bulan&tahun=$tahun\"' id='salin' value='Salin'/> <input type='reset' onclick='window.location=\"?mod=ubah&idunik=$d[idunik]&tahun=$tahun\"' value='Ubah'/> ";
    echo "<input type='button' onclick='confirmDelete(\"?mod=hapus&tahun=$tahun\");' value='Hapus'/></div>";
    echo "<table border='1'>
            <tr>
                <th colspan='6'>AIR PANAS</th>
            </tr>
            <tr>
                <th rowspan='3'>SUMBER</th>
                <th rowspan='3'>JUMLAH LOKASI</th>
                <th rowspan='3'>PEMANFAATAN<br/>Wisata, Pengobatan, Energi, dll</th>
                <th colspan='3'>KEPEMILIKAN</th>
            <tr>
            <tr>
                <th>Pemda</th>
                <th>Swasta</th>
                <th>Adat/Perorangan</th>
            </tr>";
    $s1 = mysql_query("select * from tbair_panas order by posisi asc");
    while($d1 = mysql_fetch_array($s1)){
        $_s1 = mysql_query("select * from tbinput_sda where idkat='7' and idsub = '$d1[id]' and tahun = '$tahun'");
        $_r1 = mysql_num_rows($_s1);
        $_d1 = mysql_fetch_array($_s1);
        $nilai = explode(',',$_d1['nilai']);
        if($_r1 != 0 && $_d1['nilai'] != ""){
            echo "<tr>
                    <td>$d1[nama]</td>
                    <td align=right>$nilai[0]</td>
                    <td align=right>$nilai[1]</td>
                    <td align=right>$nilai[2]</td>
                    <td align=right>$nilai[3]</td>
                    <td align=right>$nilai[4]</td>
                </tr>"; 
        }
    }
    echo "</table><link rel='stylesheet' type='text/css' href='../../../../lib/css/table2.css'/>";
}
?>