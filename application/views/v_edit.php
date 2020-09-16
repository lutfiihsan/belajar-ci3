<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
</head>
<body>
    <h1>Form Edit Data</h1>
    <?php 
        foreach($user as $u){
    ?>
    <form action="<?= base_url().'crud/update'; ?>" method="post">
        <table border="1">
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?= $u->id; ?>">
                        <input type="text" name="nama" value="<?= $u->nama; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?= $u->alamat; ?>"></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td><input type="text" name="pekerjaan" value="<?= $u->pekerjaan; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Simpan"></td>
                </tr>
            </tbody>
        </table>
    </form>
    <?php } ?>
</body>
</html>