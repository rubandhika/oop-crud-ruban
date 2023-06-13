<?php 
include 'class/Siswa.php';
$siswa = new Siswa();
$datasiswa = $siswa->tampilDataSiswa();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Siswa</title>
</head>
<body>
    <div class="siswa">
      <h1>Data Siswa</h1>
      <a href="tambahSiswa.php">Tambah</a>
      <table border="1" cellpadding="10" cellspacing="0">
        <tr>
          <th>No.</th>
          <th>Nama Siswa</th>
          <th>Kelas</th>
          <th>Photo</th>
          <th>Opsi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($datasiswa as $data) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td><?= $data["nama"]; ?></td>
          <td><?= $data["kelas"]; ?></td>
          <td><img src="/foto/<?= $data["photo"]; ?>" alt="Photo siswa" width="90"></td>
          <td>
            <a href="editSiswa.php?id=<?= $data["id"]; ?>" class="edit">Edit</a>
            <a href="hapusSiswa.php?id=<?= $data["id"]; ?>" class="hapus" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
          </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
      </table>
    </div>
</body>
</html>

    