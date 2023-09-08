<div style="margin-left:90px;margin-bottom:290px;" class="container mt-5">
    <div class="card" style="width:23rem;border-radius:50px;">
        <div class="card-body" style="background:#48494B;">
            <h5 style="color:white;" class="card-title"><?= $data['guru']['nama']; ?></h5>
            <h6 style="color:white;" class="card-subtitle"><?= $data['guru']['jenis_kelamin']; ?></h6>
            <p style="color:white;" class="card-text"><?= $data['guru']['alamat']; ?></p>
            <a style="background-color:#0055FF;color:white;"href="<?= BASE_URL; ?>/guru" class="btn">kembali</a>
        </div>
    </div>
</div>