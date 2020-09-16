<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD</title>
</head>
<body>
    <h1>Membuat CRUD Dengan CI3</h1>
    <p style="text-align:left;"><?= anchor('crud/tambah', 'Tambah Data'); ?></p>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no=1;
                foreach($user as $u){
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $u->nama; ?></td>
                <td><?= $u->alamat; ?></td>
                <td><?= $u->pekerjaan; ?></td>
                <td>
                    <?= anchor('crud/edit/'.$u->id,'Edit'); ?>
                    <?= anchor('crud/hapus/'.$u->id,'Hapus'); ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>