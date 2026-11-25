<html>
<head>
    <title>Tambah Database</title>
</head>
<body>


    
    <div style="display: inline-block; border: 2px solid black; padding: 25px 35px; text-align: left; margin-top: 40px;">
        

        <form method="POST" action="proses_simpan.php" enctype="multipart/form-data">
            <table cellpadding="6" cellspacing="0">
                <tr>
                    <td>Masukkan Kompetensi</td>
                    <td>:</td>
                    <td style="padding-left: 15px;">
                        <select name="komptensi" required>
                            <option value=""></option>
                            <option value="SIJA">SIJA</option>
                            <option value="TKJ">TKJ</option>
                            <option value="RPL">RPL</option>
                            <option value="DKV">DKV</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Masukkan NIS</td>
                    <td>:</td>
                    <td style="padding-left: 15px;"><input type="text" name="nis" required></td>
                </tr>
                <tr>
                    <td>Masukkan Nama</td>
                    <td>:</td>
                    <td style="padding-left: 15px;"><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Masukkan Tahun Angkatan</td>
                    <td>:</td>
                    <td style="padding-left: 15px;"><input type="text" name="tahun_angkatan" required></td>
                </tr>
                <tr>
                    <td>Upload File Foto</td>
                    <td>:</td>
                    <td style="padding-left: 15px;">
                        <input type="file" name="file_foto" accept="image/*" required>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="padding-left: 15px; padding-top: 15px;">
                        <input type="submit" name="simpan" value="Simpan Data">
                    </td>
                </tr>
            </table>
        </form>

        <br>
        

    </div>


</body>
</html>
