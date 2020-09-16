<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <h1>Form Input Data</h1>
    <form action="<?= base_url().'crud/tambah_aksi'; ?>" method="post">
        <table border="1">
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" id=""></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" id=""></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td><input type="text" name="pekerjaan" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="tambah" value="Tambah"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>