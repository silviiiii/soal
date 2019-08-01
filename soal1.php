<?php
$hj=15000;
$bd=6;
$pd=5;
$hd=2000;
$dj=6;
$uj=($bd*$pd)*$hj;
$ud=$dj*$hd;
$hasil=$uj+$ud;

echo "<br>harga jambu :Rp. ".$hj;
echo "<br>Banyak jambu : ".($bd*$pd). "kg";
echo "<br>uang hasil penjualan dus : Rp.".($dj*$hd);
echo "<br>uang hasil penjualan jambu :Rp.".$uj;
echo "<br>uang hasil penjualan adalah :Rp. ".$hasil;
?>