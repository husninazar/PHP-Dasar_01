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
                <td>Sisi</td>
                <td>
                    <input type="text" name="sisi" require>
                </td>
            </tr>
            <tr>
                <td>Sisi 2</td>
                <td>
                    <input type="text" name="sisi2" require>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Htung">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $sisi = $_POST['sisi'];
        $sisi2 = $_POST['sisi2'];

        $luaspersegi = $sisi * $sisi2;
        echo 'Hasil perhitungan Luas persegi';
        echo '<br> Diketahui';
        echo '<br> Sisi Pertama : ' .$sisi;
        echo '<br> Sisi Kedua : ' .$sisi2;

        echo '<br> maka Luasnya' .$luaspersegi;
    }
    ?>
</body>
</html>