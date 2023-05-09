<?php

$lingkaran = new Lingkaran(5);
$persegiPanjang = new PersegiPanjang(4, 8);
$segitiga = new Segitiga(6, 10);
$lingkaran2 = new Lingkaran(7);
$persegiPanjang2 = new PersegiPanjang(5, 10);

$bentuk2D = array($lingkaran, $persegiPanjang, $segitiga, $lingkaran2, $persegiPanjang2);

echo "<table border='1'>
        <tr>
            <th>Nama Bidang</th>
            <th>Luas</th>
            <th>Keliling</th>
        </tr>";

foreach ($bentuk2D as $bentuk) {
    echo "<tr>";
    echo "<td>" . $bentuk->namaBidang() . "</td>";
    echo "<td>" . $bentuk->luasBidang() . "</td>";
    echo "<td>" . $bentuk->kelilingBidang() . "</td>";
    echo "</tr>";
}

echo "</table>";

