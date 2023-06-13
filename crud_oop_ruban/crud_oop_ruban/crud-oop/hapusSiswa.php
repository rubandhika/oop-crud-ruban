<?php 
    require "class/Siswa.php";

    $id = $_GET["id"];
    
    $siswa = new Siswa;
    $siswa->hapusSiswa($id);
    header("location: siswa.php");

?>