<?php
$page = "Dashboard"; 

session_start();

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu, ya!')
        window.location = '../auth/login/'
    </script>
";
}

?>

<?php require '../layouts/sidebar_admin.php'; ?>
<style>
    h1{
        margin-left:270px;
    }
</style>

<h1>Halo, <?= $_SESSION["nama_lengkap"]; ?></h1>