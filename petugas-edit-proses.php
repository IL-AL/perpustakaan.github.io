<?php
$id             =$_POST['id_anggota'];
$nis            = $_POST['nis'];
$nama           = $_POST['nama'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$tempat_lahir   = $_POST['tempat_lahir'];
$tanggal_lahir  = $_POST['tanggal_lahir'];
$kelas          = $_POST['id_kelas'];
$jurusan        = $_POST['id_jurusan'];
$nomor_telepon  = $_POST['nomor_telepon'];
$alamat         = $_POST['alamat'];

$query_update = mysqli_query($konek,"UPDATE anggota SET nis = '$nis', 
                                                            nama = '$nama',
                                                            jenis_kelamin = '$jenis_kelamin',
                                                            tempat_lahir = '$tempat_lahir', 
                                                            tanggal_lahir = '$tanggal_lahir', 
                                                            id_kelas = '$kelas', 
                                                            id_jurusan = '$jurusan', 
                                                            nomor_telepon = '$nomor_telepon', 
                                                            alamat = '$alamat'
                                                            WHERE id_anggota = '$id'");
if($query_update)
{
    ?>
        <div class="alert alert-success">
            Data Berhasil Diupdate !!!
        </div>
        <script>
            alert('Data Berhasil di Update');
            window.location.href='http://localhost/26_mywebsite_12rpl2/admin.php?page=anggota';
        </script>
    <?php
   
}
else
{
    ?>
        <div class="alert alert-danger">
            Data GAGAL Diupdate !!!!!!!!!
        </div>
        <script>
            alert('Data Gagal di Update');
            window.location.href='http://localhost/26_mywebsite_12rpl2/admin.php?page=anggota';
        </script>
    <?php
}

?>