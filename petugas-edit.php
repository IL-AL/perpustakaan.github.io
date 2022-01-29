<?php
        $id =$_GET['id'];
        $query = mysqli_query($koneksi,"SELECT * FROM anggota WHERE id_anggota ='$id'");
        foreach ($query as $row){
    ?>
    <script>
        $(document).ready(function(){
            $("#edit-modal").modal('show');
        });
    </script>
<div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form edit Data Anggota</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form  action="?page=anggota-edit" method="post"> 
        <input type="hidden" name="id_anggota" value="<?php echo $row['id_anggota']; ?>">
        <div class="formm-group mb-2">
            <input value="<?php echo $row['nama']; ?>" class="form-control" type="text" name="nama" placeholder="Isi Nama" required>
        </div>
        <div class="form-group mb-2">
            <input value="<?php echo $row['jabatan']; ?>" class="form-control" type="text" name="jabatan" placeholder="Isi Jabatan" required>
        </div>

                <div class="from-group ">
                    <select value="<?php echo $row['jenis_kelamin']; ?>" class="form-control" name="jenis_kelamin" required >
                    <option vvalue="<?php echo $row['jenis_kelamin']; ?>">
                        <?php
                                if ($row['jenis_kelamin']=='l') {
                                    echo "Laki-Laki";
                                }else  {
                                    echo "Perempuan";
                                }
                        ?>
                    </option>
                        <option value="l">Laki - Laki</option>
                        <option value="p">Perempuan</option>
                    </select>
                </div>

        <div class="from-group mb-2">
            <input value="<?php echo $row['no_telpon']; ?>" class="form-control" type="text" name="no_telpon" placeholder="Isi No Telpon" required>
        </div>

        <div class="form-floating">
            <textarea  class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="alamat" required><?php echo $row['alamat']; ?></textarea>
            <label for="floatingTextarea2">Alamat</label>
        </div>

        <div class="from-group mb-2">
            <input value="<?php echo $row['tempat_lahir']; ?>" class="form-control" type="text" name="tempat_lahir" placeholder="TEMPAT LAHIR" required>
        </div>

        <div class="input-group mb-2">
        <span class="input-group-text">Tanggal Lahir</span>
            <input value="<?php echo $row['tanggal_lahir']; ?>" class="form-control" type="date" name="tanggal_lahir" placeholder="TANGGAL LAHIR" required>
        </div>

       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php
}

?>