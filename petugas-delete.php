<?php

//Proses Delete
if (isset($_GET['hapus'])) {
    $id = $_GET['id'];
    $query_delete = mysqli_query($koneksi,"DELETE FROM petugas where id_petugas = '$id'");
    
    if($query_delete){
        ?>
            <script>
                alert("Data Berhasil Di Hapus");
            </script>
        <?php
        header('refresh:0; URL=http://localhost/11_PTSGANJIL2021_XIIRPL2_fadhilahalhadiid/admin.php?page=petugas');
    }
}
////End of proses delete data/////////////////////////////////////////////////////////////////////////
