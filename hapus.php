<?php
include("./config.php");

if (isset($_POST['deletedata'])) {
    // ambil id dari query string
    $idCliente = $_POST['delete_idCliente'];

    // query hapus
    $sql = "DELETE FROM cliente WHERE idCliente = '$idCliente'";
    $query = mysqli_query($db, $sql);

    // apa query berhasil dihapus?
    if ($query) {
        header('Location: ./index.php?hapus=sukses');
    } else
        die('Location: ./index.php?hapus=gagal');
} else
    die("akses dilarang...");
