<body>
    <div style="margin-left:50px;" class="">
        <div class="container mt-5">
            <div class="col-lg-6">
                <?php Flasher::flash(); ?>
            </div>
        <div class="col-6">
        <button style="margin-bottom:20px;background-color:#E35B00;color:white;" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"
          data-bs-whatever="@getbootstrap">
          Tambah Data Komli
        </button>
                <h3 style="color:white;margin-bottom:20px">Data Komli</h3>
               
                <table style="width:65rem;" class="table table-bordered col-12" id="myTable">
          <tbody>
          <?php foreach ($data['jurusan'] as $jurusan) : ?>
          <tr>
                <td style="background-color:#363636;color:white;font-size:17px;">
                  <?= $jurusan['jurusan']; ?>
                </td>
                <td class="col-3" style="text-align:center;background-color:#363636;">
                        <a style="margin-left:5px;background-color:red;color:white;" href="<?= BASE_URL; ?>/jurusan/hapus/<?= $jurusan['id']; ?>" class="btn btn-danger" onclick="return confirm('yakin?');">hapus</a>
                        <a style="margin-left:5px;background-color:#579100;color:white;" href="<?= BASE_URL; ?>/jurusan/ubah/<?= $jurusan['id']; ?>" class="btn btn-success tampilModalUbah2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?=$jurusan['id'];?>">ubah</a>
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
          <h5 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Jurusan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?= BASE_URL; ?>/jurusan/tambah" method="POST">
          <input type="hidden" name="id" id="id">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Jurusan</label>
              <input type="text" class="form-control" id="jurusan" name="jurusan" required autocomplete="off" placeholder="Masukkan Kompetensi Keahlian">
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
