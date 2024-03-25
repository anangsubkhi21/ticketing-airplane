<?php
$page = "tiket";
require 'functions.php';
session_start();

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu, ya!');
        window.location = '../auth/login/index.php';
    </script>
    ";
}

$orderTiket = query("SELECT * FROM order_tiket")

?>

<?php require '../../layouts/sidebar_admin.php'; ?>

<style> 
  /* .main {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
} */

h1 {
    text-align: center;
    margin-bottom: 20px;
}

a:hover {
    background-color: #45a049;
}

table {
    width: 80%;
    border-collapse: collapse;
    margin-left: 290px;
}

table th, table td {
    border: 1px solid #ddd;
    padding: 10px;
}

table th {
    background-color: #4CAF50;
    color: white;
}

table tr:hover {
    background-color: #ddd;
}

button {
    background-color: #7FFFD4;
}

</style>

<?php require '../../layouts/sidebar_admin.php'; ?>
<h1>Data Pemesanan Tiket</h1>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Nama Lengkap</th>
        <th>Nomor Order</th>
        <th>Struk</th>
        <th>Status</th>
        <th>Opsi</th>
    </tr>
    <?php foreach($orderTiket as $data) : ?>
        <tr>
            <td><?= $_SESSION["nama_lengkap"]; ?></td>
            <td><?= $data["id_order"]; ?></td>
            <td><?= $data["struk"]; ?></td>
            <td>
            <?php 
                if($data["status"] == "proses"){
                    ?>
                    <p href="" style="color: blue; text-decoration: none;">Proses</p>
                    <?php
                } else if($data["status"] == "berhasil"){
                    ?>
                    <p href="" style="color: green; text-decoration: none;">Berhasil</p>
                    <?php
                } else if($data["status"] == "gagal"){
                    ?>
                    <p href="" style="color: red; text-decoration: none;">Gagal</p>
                    <?php
                }
            ?>
            </td>
            <td>
                <?php if($data["status"] == "proses") : ?>
                    <button><a href="verif.php?id=<?= $data["id_order"]; ?>" style="color: #F72798;" onClick="return confirm('Apakah Anda yakin ingin Verifikasi pesanan ini?')">Verifikasi</a></button>
                    <button><a href="reject.php?id=<?= $data["id_order"]; ?>" style="color: #red;" onClick="return confirm('Apakah Anda yakin ingin Reject pesanan ini?')">Reject</a></button>
                <?php elseif($data["status"] == "berhasil" || $data["status"] == "gagal") : ?>
                    <a href="hapus.php?id=<?= $data["id_order"]; ?>" style="color: #FF0000;" onClick="return confirm('Apakah Anda yakin ingin Hapus pesanan ini?')">Hapus</a>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
