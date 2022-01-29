<?php
$id             =$_POST['id_anggota'];
$nis            = $_POST['nis'];
$nama           = $_POST['nama'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$tempat_lahir   = $_POST['tempat_lahir'];
$tanggal_lahir  = $_POST['tanggal_lahir'];
$id_kelas          = $_POST['id_kelas'];
$id_jurusan        = $_POST['id_jurusan'];
$nomor_telpon   = $_POST['nomor_telpon'];
$alamat         = $_POST['alamat'];

$query_update = mysqli_query($koneksi,"UPDATE anggota SET nis = '$nis', 
                                                            nama = '$nama',
                                                            jenis_kelamin = '$jenis_kelamin',
                                                            tempat_lahir = '$tempat_lahir', 
                                                            tanggal_lahir = '$tanggal_lahir', 
                                                            id_jurusan = '$id_jurusan', 
                                                            id_kelas = '$id_kelas', 
                                                            nomor_telpon = '$nomor_telpon', 
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
            window.location.href='http://localhost/11_PTSGANJIL2021_XIIRPL2_fadhilahalhadiid/admin.php?page=anggota';
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
            window.location.href='http://localhost/11_PTSGANJIL2021_XIIRPL2_fadhilahalhadiid/admin.php?page=anggota';
        </script>
    <?php
}

?>