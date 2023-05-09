<?php
//koneksi ke database
$host = "localhost";
$username = "username";
$password = "password";
$database = "namadatabase";

$conn = mysqli_connect($host, $username, $password, $database);

//query untuk tabel pelanggan
$query_pelanggan = "SELECT * FROM pelanggan";
$result_pelanggan = mysqli_query($conn, $query_pelanggan);

//query untuk tabel pesanan
$query_pesanan = "SELECT * FROM pesanan";
$result_pesanan = mysqli_query($conn, $query_pesanan);

//query untuk tabel kartu
$query_kartu = "SELECT * FROM kartu";
$result_kartu = mysqli_query($conn, $query_kartu);

?>

<!-- Tampilan Tabel Pelanggan -->
<table>
  <tr>
    <th>ID Pelanggan</th>
    <th>Nama Pelanggan</th>
    <th>Alamat Pelanggan</th>
  </tr>
  <?php while($row = mysqli_fetch_assoc($result_pelanggan)) { ?>
  <tr>
    <td><?php echo $row['id_pelanggan']; ?></td>
    <td><?php echo $row['nama_pelanggan']; ?></td>
    <td><?php echo $row['alamat_pelanggan']; ?></td>
  </tr>
  <?php } ?>
</table>

<!-- Tampilan Tabel Pesanan -->
<table>
  <tr>
    <th>ID Pesanan</th>
    <th>ID Pelanggan</th>
    <th>Tanggal Pesanan</th>
  </tr>
  <?php while($row = mysqli_fetch_assoc($result_pesanan)) { ?>
  <tr>
    <td><?php echo $row['id_pesanan']; ?></td>
    <td><?php echo $row['id_pelanggan']; ?></td>
    <td><?php echo $row['tanggal_pesanan']; ?></td>
  </tr>
  <?php } ?>
</table>

<!-- Tampilan Tabel Kartu -->
<table>
  <tr>
    <th>ID Kartu</th>
    <th>ID Pelanggan</th>
    <th>Nomor Kartu</th>
  </tr>
  <?php while($row = mysqli_fetch_assoc($result_kartu)) { ?>
  <tr>
    <td><?php echo $row['id_kartu']; ?></td>
    <td><?php echo $row['id_pelanggan']; ?></td>
    <td><?php echo $row['nomor_kartu']; ?></td>
  </tr>
  <?php } ?>
</table>

<?php
//menutup koneksi ke database
mysqli_close($conn);
?>
