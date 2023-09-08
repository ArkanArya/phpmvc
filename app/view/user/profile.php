<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'];?></title>
</head>
<body> -->
    <div class="container text-center mt-4">
    <img  src="<?= BASE_URL;?>../../public/img/arkan.png" alt="Novi Foto" style="margin-left:-500px;margin-top:50px;border-radius:50%;width:300px;" class="rounded-circle shadow">
    <h3 style="margin-top:-240px;font-weight:bold;color:white;">Hallo</h3>
    
    <h4 style="margin-left:383px;margin-top:0px;color:white;">Nama saya<?= $data['nama'];?></h4>
    <h4 style="margin-left:181px;color:white;">Saya seorang <?= $data['pekerjaan'];?></h4>
    <h4 style="margin-left:392px;color:white;">Saya bersekolah di <?= $data['sekolah'];?></h4>
    <h4 style="margin-left:477px;color:white;margin-bottom:170px;">Saya dari Jurusan <?= $data['jurusan'];?></h4>
    </div>
<!-- </body>
</html> -->