<?php 
include_once("Koneksi.php"); 
class Siswa extends Database{

	function tampilDataSiswa(){
		$tampilDataSiswa = "SELECT * FROM siswa";
        return $this->db->query($tampilDataSiswa)->fetch_all(MYSQLI_ASSOC);
	}

    public function viewById($id){
        $dataSiswa = "SELECT * FROM siswa WHERE id = '$id'";
        return $this->db->query($dataSiswa)->fetch_assoc();
    }

    //function tambah data 
    public function tambahSiswa($data_siswa)
    {
        $nama_siswa = $data_siswa["nama"];
        $kelas = $data_siswa["kelas"];
        $photo = $data_siswa["photo"];

        $query = "INSERT INTO siswa VALUES (NULL,'$nama_siswa', '$kelas', '$photo')";
      
      if($this->db->query($query) === TRUE){
        return mysqli_affected_rows($this->db);
        }

    }

    //function hapus data
    public function hapusSiswa($data_siswa)
    {
        $query = "DELETE FROM siswa WHERE id='$data_siswa'";
        
        if($this->db->query($query) === TRUE){
            return mysqli_affected_rows($this->db);
        }
    }

    //function edit
    public function editSIswa($data_siswa)
    {
        $id = $data_siswa["id"];
        $nama = $data_siswa["nama"];
        $kelas = $data_siswa["kelas"];
        $photo = $data_siswa["photo"];

        $query = "UPDATE siswa SET 
            nama = '$nama',
            kelas = '$kelas',
            photo = '$photo' WHERE id = '$id'";
        
        if($this->db->query($query) === TRUE){
            return "Berhasil";
        }return "Gagal";
    }

}

?>