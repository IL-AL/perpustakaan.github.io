<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <center><h2>Form Edit Data Anggota</h2></center>
        <!-- Proses query untuk menampilkan data yang mau di edit -->
        <?php
            $id = $_GET['id'];
            $query = mysqli_query($koneksi,"SELECT * FROM anggota WHERE id_anggota = '$id'");
            foreach ($query as $row) {
        ?>

        <!-- -------------------------------------------------- -->
        <form action="?page=anggota-edit-proses" method="POST">
            <!-- tambahkan input hidden untuk menyisipkan id anggota yg mau diedit, dibutuhkan pada saat edit proses query -->
            <input value="<?php echo $row['id_anggota'] ?>" class="form-control" type="hidden" name="id_anggota">
            <!-- --------------------------------------------------------------------------------------------------------- -->
            <div class="form-group">
                <label for="">NIS</label>
                <input value="<?php echo $row['nis'] ?>" class="form-control" type="text" name="nis" placeholder="Nomor Induk Siswa" required>
            </div>
            <div class="form-group mt-2">
            <label for="">Nama</label>
                <input value="<?php echo $row['nama'] ?>" class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group mt-2">
                <label for="">Gender</label>
                <select class="form-control" name="jenis_kelamin">
                    <option value="<?php echo $row['jenis_kelamin'] ?>"><?php echo $row['jenis_kelamin'] ?></option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="">Tempat Lahir</label>
                <input value="<?php echo $row['tempat_lahir'] ?>" class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir">
            </div>
            <div class="form-group mt-2">
                <label for="">Tanggal Lahir</label>
                <input value="<?php echo $row['tanggal_lahir'] ?>" class="form-control" type="date" name="tanggal_lahir">
            </div>
            <div class="form-group mt-2">
                <select class="form-control" name="id_kelas" required>
                        <option value="">--Pilih Kelas--</option>
                        <?php
                            $query_kelas = mysqli_query($koneksi,"SELECT * FROM kelas");
                            foreach ($query_kelas as $id_kelas) {
                                ?>
                                <option value="<?php echo $id_kelas['id_kelas']?>"><?php echo $id_kelas['nama_kelas']?></option>
                                <?php
                            }
                        ?>
                        
                    </select>
            </div>
            <div class="form-group mt-2">
            <select class="form-control" name="id_jurusan" required>
                        <option value="">--Pilih Jurusan--</option>
                        <?php
                            $query_jurusan = mysqli_query($koneksi,"SELECT * FROM jurusan");
                            foreach ($query_jurusan as $id_jurusan) {
                                ?>
                                <option value="<?php echo $id_jurusan['id_jurusan']?>"><?php echo $id_jurusan['nama_jurusan']?></option>
                                <?php
                            }
                        ?>
                    </select>
            </div>
                        
            <div class="form-group mt-2">
                <label for="">Nomor Telepon</label>
                <input value="<?php echo $row["nomor_telpon"]?>" class="form-control" type="text" name="nomor_telpon" placeholder="Nomor Telepon">
            </div>
            <div class="form-group mt-2">
                <label for="">Alamat</label>
                <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap"><?php echo $row["alamat"]?></textarea>
            </div>
            <br>
            <center>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="save" class="btn btn-primary">Save</button>
            </center>
            <br>
        </form>
        <?php
        }
        ?>
    </div>
    <div class="col-3"></div>
</div>