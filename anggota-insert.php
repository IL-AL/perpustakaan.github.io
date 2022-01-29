<?php

if (isset($_POST['save'])) {
     $nis            = $_POST['nis'];
     $nama           = $_POST['nama'];
     $jenis_kelamin  = $_POST['jenis_kelamin'];
     $tempat_lahir   = $_POST['tempat_lahir'];
     $tanggal_lahir  = $_POST['tanggal_lahir'];
     $id_jurusan        = $_POST['id_jurusan'];
     $id_kelas          = $_POST['id_kelas'];
     $nomor_telpon     = $_POST['nomor_telpon'];
     $alamat         = $_POST['alamat'];
     
    $query_insert = mysqli_query($koneksi,"INSERT INTO anggota 
    VALUES('','$nis','$nama','$jenis_kelamin','$tempat_lahir',
    '$tanggal_lahir','$id_jurusan','$id_kelas','$no_telepon','$alamat')");



if ($query_insert) {
// header('refresh:1  URL=http://localhost/3_mywebsite_12RPL2/admin.php?page=anggota');
?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
BERHASIL DITAMBAHKAN
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
}else{
echo "Data Gagal Disimpan";
}
}

?>