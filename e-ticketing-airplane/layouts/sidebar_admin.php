<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin </title>
    <link rel="stylesheet" href="/e-ticketing-airplane/assets/style/admin.css"> 
    <link rel="stylesheet" href="/e-ticketing-airplane/assets/sweet-alert/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="/e-ticketing-airplane/assets/sweet-alert/css/sweetalert.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="sidebar w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large"
        onclick="w3_close()">Close &times;</button>
        <h2>Halaman Admin</h2>
        <a href="/e-ticketing-airplane/admin/index.php" class="<?php if($page == "Dashboard") echo "active" ?>" class="w3-bar-item"><i class="fas fa-home"></i>Dashboard</a>
        <a href="/e-ticketing-airplane/admin/pengguna" class="<?php if($page == "pengguna") echo"active" ?>"><i class="fas fa-users"></i>Data Pengguna</a>
        <a href="/e-ticketing-airplane/admin/maskapai" class="<?php if($page == "maskapai") echo"active" ?>"><i class="fas fa-plane"></i></i>Data Maskapai</a>
        <a href="/e-ticketing-airplane/admin/jadwal" class="<?php if($page == "penerbangan") echo"active" ?>"><i class="far fa-calendar-alt"></i> Data Jadwal Penerbangan</a>
        <a href="/e-ticketing-airplane/admin/konfirmasi/index.php" class="<?php if($page == "tiket") echo"active" ?>"><i class="fas fa-shopping-cart"></i>Konfirmasi Pembayaran</a>
        <a href="/e-ticketing-airplane/admin/riwayat/history.php" class="<?php if($page == "riwayat") echo"active" ?>"><i class="far fa-calendar-alt"></i>Riwayat Transaksi</a>
        <a href="/e-ticketing-airplane/logout.php" onClick="return confirm('Apakah anda yakin ingin logout?')"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>

    <div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
</div>

    <script src="/e-ticketing-airplane/assets/sweet-alert/js/jquery-2.1.4.min.js"></script>
    <script src="/e-ticketing-airplane/assets/sweet-alert/js/sweetalert.min.js"></script>

<script>
    function w3_open() {
    document.getElementById("main").style.marginLeft = "25%";
    document.getElementById("mySidebar").style.width = "25%";
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("openNav").style.display = 'none';
    }
    function w3_close() {
    document.getElementById("main").style.marginLeft = "0%";
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("openNav").style.display = "inline-block";
    }
    </script>
</body>
</html>