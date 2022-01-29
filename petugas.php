<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
    <center><h4 class="mt-4 mb-3">Data Petugas</h4></center>
    <div class="container">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Data
</button>
    <table class="table table-info">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Jenis kelamin</th>
            <th>Nomor_Telepon</th>
            <th>Alamat</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
    <?php
    $no =1;
    $query = mysqli_query($koneksi ,"SELECT * FROM petugas");
    // $query = mysqli_query($koneksi, "SELECT anggota.id_anggota, anggota.nis, anggota.nama, anggota.jenis_kelamin, anggota.tempat_lahir, anggota.tanggal.lahir,
    // anggota.id_jurusan, anggota.id_kelas, anggota.nomor_telpon, anggota.alamat, kelas.id_kelas, kelas.nama_kelas, jurusan.id_jurusan, jurusan.nama_jurusan
    // FROM anggota
    // JOIN kelas ON anggota.id_kelas = kelas.id_kelas
    // JOIN jurusan ON anggota.id_jurusan = jurusan.id_jurusan");
    foreach($query as $row){
    ?>
    
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $row ['nama'] ?></td>
            <td><?php echo $row ['jabatan'] ?></td>
            <td align="center" valign="middle"><?php echo $row['jenis_kelamin']=="L"?"Laki-laki":"Perempuan"; ?></td>
            <td><?php echo $row ['no_telpon'] ?></td>
            <td><?php echo $row ['alamat'] ?></td>
            <td><?php echo $row ['username'] ?></td>
            <td><?php echo $row ['password'] ?></td>
            <td valign="middle">

            <a href="?page=petugas-delete&hapus&id=<?php echo $row['id_petugas'];?>">
                <button class="btn btn-danger">Hapus</button>
            <a href="?page=petugas-edit&edit&id=<?php echo $row['id_petugas'];?>">
                <button class="btn btn-warning">Edit</button>

            </td>
        </tr>
    <?php
    $no++;       
    }
    ?>
    </table>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="?page=petugas-insert" method="post">
        <div class="form-group mb-2">
        <input type="text" class="form-control" name="nama" placeholder="Isi Nama" required="">
        </div>
        
        <div class="form-group mb-2">
        <select class="form-control" name="jabatan">
            <option value="">--Pilih Jabatan--</option>
            <?php
           $query_jabatan = mysqli_query($koneksi,"SELECT * FROM jabatan");
           foreach ($query_jabatan as $jabatan) {
            ?>
              <option value="<?php echo $jabatan['nama_jabatan'] ?>"><?php echo $jabatan ['nama_jabatan']?></option>
            <?php
           }
            ?>
            </select>
           </div> 
           
        <div class="form-group mb-2">
        <select class="form-control" name="jenis_kelamin">
            <option value="">--Pilih Jenis Kelamin--</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="form-group mb-2">
        <input type="text" class="form-control" name="no_telpon" placeholder="isi Nomor Telpon" required="">
        </div>
        <div class="form-group mb-2">
        <input type="text" class="form-control" name="alamat" placeholder="Isi Alamat" required="">
        </div>
        <div class="form-group mb-2">
        <input type="text" class="form-control" name="username" placeholder="Isi Username" required="">
        </div>
        <div class="form-group mb-2">
        <input type="text" class="form-control" name="password" placeholder="Isi Password" required="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-warning">Simpan</button>
      </div>
      </form>


    </div>
  </div>
</div>
<br>
<br>
<!-- end proses insert petugas -->
</body>
</html>