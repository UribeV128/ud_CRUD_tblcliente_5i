<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['edit_data'])) {
    // ambil data dari form
    $idCliente = $_POST['edit_idCliente'];
    $Nombre = $_POST['edit_Nombre'];
    $ApellidoP = $_POST['edit_ApellidoP'];
    $ApellidoM = $_POST['edit_ApellidoM'];
    $Tel = $_POST['edit_Tel'];
    $Correo = $_POST['edit_Correo'];
    $CURP = $_POST['edit_CURP'];
    $Domicilio = $_POST['edit_Domicilio'];


    // query
    $sql = "UPDATE cliente SET Nombre='$Nombre', ApellidoP='$ApellidoP', ApellidoM='$ApellidoM', Tel='$Tel', Correo='$Correo', CURP='$CURP', Domicilio='$Domicilio' WHERE idCliente = '$idCliente'";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?update=sukses');
    else
        header('Location: ./index.php?update=gagal');
} else
    die("Akses dilarang...");
