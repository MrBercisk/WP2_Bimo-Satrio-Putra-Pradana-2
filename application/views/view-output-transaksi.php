<html>

<head>
    <title>Tampilan Transaksi Sepatu</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Transaksi Pembelian Sepatu
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Pembeli</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>No hp</td>
                <td>:</td>
                <td>
                    <?= $nohp; ?>
                </td>
            </tr>

            <tr>
                <td>Merk Sepatu</td>
                <td>:</td>
                <td>
                    <?= $merk; ?>
                </td>
            </tr>
            <tr>
                <td>Ukuran Sepatu</td>
                <td>:</td>
                <td>
                    <?= $ukuran; ?>
                </td>
            </tr>
            <?php
            if ($merk == "Nike") {
                $harga = 375000;
            } else if ($merk == "Adidas") {
                $harga = 300000;
            } else if ($merk == "Kickers") {
                $harga = 250000;
            } else if ($merk == "Eiger") {
                $harga = 275000;
            } else if ($merk == "Bucherri") {
                $harga = 400000;
            }
            ?>

            <tr>
                <td>Harga Sepatu</td>
                <td>:</td>
                <td>
                    <?= $harga; ?>
                </td>
            </tr>

            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('sepatu'); ?>">Input data lagi</a>
                </td>
            </tr>

        </table>
    </center>

</body>

</html>