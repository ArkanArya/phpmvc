<body>
    <div style="margin-left:50px;" class="">
        <div class="container mt-5">
            <div class="col-lg-6">
                <?php Flasher::flash(); ?>
            </div>
        <div class="col-6">
        <button style="margin-bottom:20px;background-color:#E35B00;color:white;" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"
          data-bs-whatever="@getbootstrap">
          Tambah Data Siswa
        </button>
                <h3 style="color:white;margin-bottom:20px;">Data Siswa</h3>
                <table style="width:65rem;" class="table table-bordered " id="myTable">
          <tbody>
                <?php foreach ($data['siswa'] as $siswa) : ?>
                  <tr>
                  <td style="background-color:#363636;color:white;font-size:17px;">
                  <?= $siswa['nama']; ?>
                </td>
                  <td class="col-3" style="text-align:center;background-color:#363636;">
                        <a style="background-color:red;" href="<?= BASE_URL; ?>/siswa/hapus/<?= $siswa['id']; ?>" class="btn btn-danger" onclick="return confirm('yakin?');">hapus</a>
                        <a style="margin-left:7px;background-color:#579100;color:white;" href="<?= BASE_URL; ?>/siswa/ubah/<?= $siswa['id']; ?>" class="btn btn-success tampilModalUbah" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?=$siswa['id'];?>">ubah</a>
                        <a style="margin-left:7px;background-color:#0055FF;color:white" href="<?= BASE_URL; ?>/siswa/detail/<?= $siswa['id']; ?>" class="btn btn-primary">Detail</a>
                
                    <?php endforeach;?>
                    </td>
              </tr>

                </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Siswa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?= BASE_URL; ?>/siswa/tambah" method="POST">
          <input type="hidden" name="id" id="id">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" required autocomplete="off" placeholder="Masukkan Nama">
            </div>
            <div class="form-group mb-3">
              <label for="jenis_kelamin">Jenis Kelamin</label>
              <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>

            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" required autocomplete="off" placeholder="Masukkan Alamat">
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
        </form>
      </div>
    </div>
  </div>
