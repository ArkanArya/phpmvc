<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'];?></title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    min-height: 80vh;
    background: url('background.jpg') no-repeat;
    background-size: cover;
    background-position: center;
    background: linear-gradient(#48494B , black);
}

.header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 100px;
    background: rgba(255, 255, 255, .1);
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 2;
    backdrop-filter: blur(10px);
    border-bottom: 2px solid rgba(255, 255, 255, .2);
}

.header::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .5), transparent);
    transition: .5s;
}

.header:hover::before {
    left: 100%;
}

.logo {
    color: #fff;
    font-size: 25px;
    text-decoration: none;
    font-weight: 600;
    cursor: default;
}

.navbar a {
    color: #fff;
    font-size: 18px;
    text-decoration: none;
    margin-left: 35px;
    transition: .3s;
}

.navbar a:hover {
    color: black;

}


</style>
<body>
<header class="header">
        <a href="#" class="logo">Rpl World</a>
    <nav class="navbar">
        <a style="text-decoration:none;" href="<?= BASE_URL; ?>/">Home </a>
        <a style="text-decoration:none;" href="<?= BASE_URL; ?>/jurusan">Komli</a>
        <a style="text-decoration:none;" href="<?= BASE_URL; ?>/guru">Data Guru</a>
        <a style="text-decoration:none;" href="<?= BASE_URL; ?>/siswa">Data Siswa</a>
        <a style="text-decoration:none;" href="<?= BASE_URL; ?>/user/profile" >About</a>
    </nav>
    </header>
<section style="margin-top:130px;">  