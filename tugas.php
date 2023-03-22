<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Rumus Bangun datar Persegi</title>
</head>
<body>
    <h1> Bangun Datar Persegi</h1>

    <form method="POST">
        <table>
            <tr>
                <td>Sisi alas</td>
                <td>
                    <input type="text" name="a" require>
                </td>
            </tr>
            <tr>
                <td>Sisi miring</td>
                <td>
                    <input type="text" name="b" require>
                </td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td><input type="text" name="tinggi"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="proses" value="proses">
                </td>
            </tr>
        </table>
    </form>
    <?php
    $a=$_POST['a'];
    $b = $_POST['b'];
    $t = $_POST['tinggi'];
    $L = $a * $t;
    $kli = 2 * ($a + $b);
    $sisi = '';
    ?>
    <tr>
        <th>Luas JG</th>
        <th>Keliling JG</th>
        <th>Sisi Miring</th>
    </tr>
    <tr>
        <td><?php echo "$a * $t = $L"; ?></td>
        <td><?php echo "2 * ($a + $b = $kli"; ?></td>
        <td><?php echo "($kli / 2) - $a = $sisi"; ?></td>
    </tr>
</body>
</html>