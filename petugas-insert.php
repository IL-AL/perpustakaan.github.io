<?php

if (isset($_POST['save'])) {
     $nama           = $_POST['nama'];
     $jabatan        = $_POST['jabatan'];
     $jenis_kelamin  = $_POST['jenis_kelamin'];
     $no_telpon      = $_POST['no_telpon'];
     $alamat         = $_POST['alamat'];
     $username       = $_POST['username'];
     $password       = $_POST['password'];

    ///////////////////////////////////////// password hash untuk mengubah password menjadi bentuk yang unik
    $options = [
        'cost' => 12,
    ];
    $password_incrypt = password_hash($password, PASSWORD_BCRYPT, $options);
    /////////////////////////////////////////

    $query_insert = mysqli_query($koneksi,"INSERT INTO petugas 
    VALUES('','$nama','$jabatan','$jenis_kelamin','$no_telpon',
    '$alamat','$username','$password_incrypt')");



if ($query_insert) {
header('refresh:1  URL=http://localhost/11_PTSGANJIL2021_XIIRPL2_fadhilahalhadiid/admin.php?page=petugas');
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