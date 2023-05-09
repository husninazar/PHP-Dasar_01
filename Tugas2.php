<?php
// Input variabel pegawai
$nama = "John Doe";
$jabatan = "Manager";
$status = "Menikah";
$jmlAnak = 2;
$isMuslim = true;
$gapok = 0;

// Tentukan gaji pokok berdasarkan jabatan
switch ($jabatan) {
    case "Manager":
        $gapok = 20000000;
        break;
    case "Asisten":
        $gapok = 15000000;
        break;
    case "Kabag":
        $gapok = 10000000;
        break;
    case "Staff":
        $gapok = 4000000;
        break;
    default:
        echo "Jabatan tidak valid.";
}

// Hitung tunjangan jabatan
$tunjangan_jabatan = $gapok * 0.2;

// Hitung tunjangan keluarga
if ($status == "Menikah") {
    if ($jmlAnak <= 2) {
        $tunjangan_keluarga = $gapok * 0.05;
    } else if ($jmlAnak >= 3 && $jmlAnak <= 5) {
        $tunjangan_keluarga = $gapok * 0.1;
    } else {
        $tunjangan_keluarga = 0;
    }
} else {
    $tunjangan_keluarga = 0;
}

// Hitung gaji kotor
$gaji_kotor = $gapok + $tunjangan_jabatan + $tunjangan_keluarga;

// Tentukan zakat_profesi
$zakat_profesi = $isMuslim && $gaji_kotor >= 6000000 ? $gaji_kotor * 0.025 : 0;

// Hitung take home pay
$take_home_pay = $gaji_kotor - $zakat_profesi;

// Output hasil perhitungan gaji pegawai
echo "Nama: " . $nama . "<br>";
echo "Jabatan: " . $jabatan . "<br>";
echo "Gaji Pokok: " . number_format($gapok) . "<br>";
echo "Tunjangan Jabatan: " . number_format($tunjangan_jabatan) . "<br>";
echo "Tunjangan Keluarga: " . number_format($tunjangan_keluarga) . "<br>";
echo "Gaji Kotor: " . number_format($gaji_kotor) . "<br>";
echo "Zakat Profesi: " . number_format($zakat_profesi) . "<br>";
echo "Take Home Pay: " . number_format($take_home_pay);
?>
