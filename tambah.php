<?php
include("./config.php");


// Verificar si se ha hecho clic en el botón de registro
if (isset($_POST['tambah'])) {
       // Obtener datos del formulario
    $idCliente = $_POST['idCliente'];
    $Nombre = $_POST['Nombre'];
    $ApellidoP = $_POST['ApellidoP'];
    $ApellidoM = $_POST['ApellidoM'];
    $Tel = $_POST['Tel'];
    $Correo = $_POST['Correo'];
    $CURP = $_POST['CURP'];
    $Domicilio = $_POST['Domicilio'];

 // Consulta SQL
    $sql = "INSERT INTO cliente( Nombre, ApellidoP, ApellidoM, Tel,Correo, CURP,Domicilio)
    VALUES('$Nombre', '$ApellidoP', '$ApellidoM', '$Tel' , '$Correo','$CURP', '$Domicilio')";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?status=sukses');
    else
        header('Location: ./index.php?status=gagal');
} else
    die("Akses dilarang...");
