<?php 

require "class/Siswa.php";

$siswa = new Siswa; 
$dataSiswa = $siswa->viewById($_GET["id"]);

if (isset($_POST["submit"])) {
  $data = [
    "id" => $_POST["id"],
    "nama" => $_POST["nama"],
    "kelas" => $_POST["kelas"],
    "photo" => $_POST["photo"]
    ];

  $siswa = new Siswa;
  
  if ($siswa->editSiswa($data) > 0) {
      echo "
          <script>
              alert('Data siswa berhasil diedit');
              document.location.href = 'siswa.php';
          </script>
          ";
  } else {
    echo "
    <script>
        alert('Data siswa gagal diedit');
        document.location.href = 'siswa.php';
    </script>
    ";
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data Siswa</title>
</head>
<body>
  <div class="tambah-siswa">
    <h1>Edit Data Siswa</h1>
      <form action="" method="POST">
          <div class="row p-3">
              <div class="col-md-12 mb-4">
                  <input type="hidden" name="id" value="<?= $dataSiswa["id"]; ?>">
                  <label for="" class="form-label">Nama Siswa</label><br />
                  <input type="text" name="nama" class="form-control" value="<?= $dataSiswa["nama"]; ?>" required /><br /> <br />
                                             
                  <label for="" class="form-label">Kelas</label><br />
                  <input type="text" name="kelas" class="form-control" value="<?= $dataSiswa["kelas"]; ?>" required /><br /> <br />
                                         
                  <label for="" class="form-label">Foto</label><br />
                  <input type="text" name="photo" class="form-control" value="<?= $dataSiswa["photo"] ?>" required /><br /> <br />
                       
                  <button type="submit" name="submit">Tambah</button>
              </div>
          </div>
      </form>
  </div>
</body>
</html>
                   