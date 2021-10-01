<html>

<head>
    <title>Input Pemesanan Tiket</title>
</head>

<body>
    <center>
        <form action="<?= base_url('cinema/cetak'); ?>" method="POST">

            <table>
                <tr>
                    <th colspan="3">
                        <b>Pemesanan Tiket Cinema 99</b>
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Pemesan</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>

                <tr>
                    <th>Judul Film</th>
                    <td>:</td>
                    <td>
                        <select name="judul" id="judul">
                            <option>~Pilih~</option>
                            <option>Parasite</option>
                            <option>Hereditary</option>
                            <option>The Closet</option>
                            <option>Kamen Rider Reiwa</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Pukul</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="pukul" value="14.20">14.20
                        <input type="radio" name="pukul" value="15.40">15.40
                        <input type="radio" name="pukul" value="16.40">16.40
                    </td>
                </tr>
                <tr>
                    <th>Tipe Studio</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="tipe" value="Reguler 2D">Reguler 2D
                        <input type="radio" name="tipe" value="3D">3D
                        <input type="radio" name="tipe" value="Velvet">Velvet
                    </td>
                </tr>
                <tr>
                    <th>Jumlah Pesan</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="jumpes" id="jumpes">
                    </td>
                </tr>

                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Hitung">
                        <input type="reset" value="Batal">
                    </td>
                </tr>
            </table>

        </form>
    </center>
</body>

</html>