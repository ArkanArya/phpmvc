<div style="margin-left:90px;margin-bottom:290px;" class="container mt-5">
    <div class="card" style="width:23rem;border-radius:50px;">
        <div class="card-body" style="background:#48494B;">
            <h5 style="color:white;" class="card-title"><?= $data['siswa']['nama']; ?></h5>
            <h6 style="color:white;" class="card-subtitle"><?= $data['siswa']['jenis_kelamin']; ?></h6>
            <p style="color:white;" class="card-text"><?= $data['siswa']['alamat']; ?></p>
            <a href="<?= BASE_URL; ?>/siswa" class="btn btn-primary">kembali</a>
        </div>
    </div>
</div>