<html>

<head>
    <title>Form Input DataSiswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('datasiswa/cetak'); ?>"method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Siswa
                    </th>
                </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <th>:</th>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>
            <?= form_error('nama'); ?>
            <tr>
                <th>NIS</th>
                <td>:</td>
                <td>
                    <input type="text" name="nis" id="nis">
                </td>
            </tr>
            <?= form_error('nis'); ?>
            <tr>
                <th>Kelas</th>
                <th>:</th>
                <td>
                    <input type="text" name="kelas" id="kelas">
                </td>
            </tr>
            <?= form_error('kelas'); ?>
            <tr>
                <th>Tanggal Lahir</th>
                <th>:</th>
                <td>
                    <input type="text" name="tanggal" id="tanggal">
                </td>
            </tr>
            <?= form_error('tanggal'); ?>
            <tr>
                <th>Tempat Lahir</th>
                <th>:</th>
                <td>
                    <input type="text" name="tempat" id="tempat">
                </td>
            </tr>
            <?= form_error('tempat'); ?>
            <tr>
                <th>Alamat</th>
                <th>:</th>
                <td>
                    <input type="text" name="alamat" id="alamat">
                </td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <th>:</th>
                <td>
                <input type="radio" name="jenis" id="jenis" value="Laki-Laki">Laki-Laki
                <input type="radio" name="jenis" id="jenis" value="Prempuan">prempuan 
            </tr>
                <th>Agama</th>
                <td>:</td>
                <td>
                    <select name="agama" id="agama">
                        <option value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen Katholik">Kristen Katholik</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
 </center>
</body>

</html>