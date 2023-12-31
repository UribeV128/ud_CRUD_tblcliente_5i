<?php include("./config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar Dasar CRUD dengan PHP dan MySQL">
    <title>Neutrogena</title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- material icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom" style="position: sticky !important;
    top: 0 !important; z-index : 99999 !important;">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">Neutrogena</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link active text-sm-start text-center" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary ms-md-4 text-white" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <!-- form tambah cliente -->
        <div class="card mb-5">
            <!-- <div class="card-header">
                Latihan CRUD PHP & MySQL
            </div> -->
            <!-- tambah data -->
            <div class="card-body">
                <h3 class="card-title">Vivian Uribe Mendoza 5-i</h3>
                <p class="card-text">Tabla: Cliente</p>

                <!-- tampilkan pesan sukses ditambah -->
                <?php if (isset($_GET['status'])): ?>
                    <?php
                    if ($_GET['status'] == 'sukses')
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Exito!</strong> Los datos se han añadido correctamente
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    else
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Los datos no se han añadido correctamente
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    ?>
                <?php endif; ?>


                <form class="row g-3" action="tambah.php" method="POST">

                    <div class="col-12">
                        <label for="Nombre" class="form-label">Nombre </label>
                        <input type="text" name="Nombre" class="form-control" placeholder="Nombre del cliente" required>
                    </div>

                    <div class="col-12">
                        <label for="ApellidoP" class="form-label">Apellido Paterno </label>
                        <input type="text" name="ApellidoP" class="form-control" placeholder="Apellido Paterno"
                            required>
                    </div>
                    <div class="col-12">
                        <label for="ApellidoM" class="form-label">Apellido Materno </label>
                        <input type="text" name="ApellidoM" class="form-control" placeholder="Apellido Materno"
                            required>
                    </div>

                    <div class="col-md-4">
                        <label for="Tel" class="form-label">Telefono del Cliente</label>
                        <input type="text" name="Tel" class="form-control" placeholder="Telefono del Cliente" required>
                    </div>
                    <div class="col-md-4">
                        <label for="Correo" class="form-label">Correo del Cliente</label>
                        <input type="text" name="Correo" class="form-control" placeholder="Correo del Cliente" required>
                    </div>
                    <div class="col-md-4">
                        <label for="CURP" class="form-label">CURP del Cliente</label>
                        <input type="text" name="CURP" class="form-control" placeholder="CURP del Cliente" required>
                    </div>
                    <div class="col-md-4">
                        <label for="Domicilio" class="form-label">Domicilio del Cliente</label>
                        <input type="text" name="Domicilio" class="form-control" placeholder="Domicilio del Cliente"
                            required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" value="daftar" name="tambah"><i
                                class="fa fa-plus"></i><span class="ms-2">Añadir datos</span></button>
                    </div>
<div>
                </form>
            </div>
        </div>


        <!-- judul tabel -->
        <h5 class="mb-3">Lista de registro de clientes</h5>




        <!-- tampilkan pesan sukses dihapus -->
        <?php if (isset($_GET['hapus'])): ?>
            <?php
            if ($_GET['hapus'] == 'sukses')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Sukses!</strong> Los datos se han borrado correctamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> No se borraron los datos!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tampilkan pesan sukses di edit -->
        <?php if (isset($_GET['update'])): ?>
            <?php
            if ($_GET['update'] == 'sukses')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Exito!</strong> Datos actualizados correctamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Datos no actualizados!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tabel -->
        <div class="table-responsive mb-5 card">
            <?php
            echo "<div class='card-body'>";

            echo "<table class='table table-hover align-middle bg-white'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col' class='text-center'>idCliente</th>";
            echo "<th scope='col'>Nombre</th>";
            echo "<th scope='col'>ApellidoP</th>";
            echo "<th scope='col'>ApellidoM</th>";
            echo "<th scope='col'>Tel</th>";
            echo "<th scope='col'>Correo</th>";
            echo "<th scope='col'>CURP</th>";
            echo "<th scope='col'>Domicilio</th>";
            echo "<th scope='col' class='text-center'>Opsi</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";



            $batas = 10;
            $halaman = isset($_GET['halaman']) ? (int) $_GET['halaman'] : 1;
            $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

            $previous = $halaman - 1;
            $next = $halaman + 1;

            $data = mysqli_query($db, "SELECT * FROM cliente");
            $jumlah_data = mysqli_num_rows($data);
            $total_halaman = ceil($jumlah_data / $batas);

            $data_mhs = mysqli_query($db, "SELECT * FROM cliente LIMIT $halaman_awal, $batas");
            $no = $halaman_awal + 1;

            // $sql = "SELECT * FROM cliente";
            // $query = mysqli_query($db, $sql);
            



            while ($cliente = mysqli_fetch_array($data_mhs)) {
                echo "<tr>";
                echo "<td class='text-center'>" . $cliente['idCliente'] . "</td>";

                echo "<td>" . $cliente['Nombre'] . "</td>";
                echo "<td>" . $cliente['ApellidoP'] . "</td>";
                echo "<td>" . $cliente['ApellidoM'] . "</td>";
                echo "<td>" . $cliente['Tel'] . "</td>";
                echo "<td>" . $cliente['Correo'] . "</td>";
                echo "<td>" . $cliente['CURP'] . "</td>";
                echo "<td>" . $cliente['Domicilio'] . "</td>";

                echo "<td class='text-center'>";

                echo "<button type='button' class='btn btn-primary editButton pad m-1'><span class='material-icons align-middle'>edit</span></button>";

                // tombol hapus
                echo "<button type='button' class='btn btn-danger deleteButton pad m-1'><span class='material-icons align-middle'>delete</span></button>";
                echo "</td>";

                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
            if ($jumlah_data == 0) {
                echo "<p class='text-center'>Tidak ada data yang tersedia pada tabel ini</p>";
            } else {
                echo "<p>Total $jumlah_data entri</p>";
            }

            echo "</div>";
            ?>
        </div>

        <!-- pagination -->
        <nav class="mt-5 mb-5">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php echo ($halaman > 1) ? "href='?halaman=$previous'" : "" ?>><i
                            class="fa fa-chevron-left"></i></a>
                </li>
                <?php
                for ($x = 1; $x <= $total_halaman; $x++) {
                    ?>
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>">
                            <?php echo $x; ?>
                        </a></li>
                    <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" <?php echo ($halaman < $total_halaman) ? "href='?halaman=$next'" : "" ?>><i
                            class="fa fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Modal Edit-->
        <div class='modal fade' style="top:58px !important;" id='editModal' tabindex='-1'
            aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' style="margin-bottom:100px !important;">
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Editar datos</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>

                    <?php
                    $sql = "SELECT * FROM cliente";
                    $query = mysqli_query($db, $sql);
                    $cliente = mysqli_fetch_array($query);
                    ?>

                    <form action='edit.php' method='POST'>
                        <div class='modal-body text-start'>
                            <input type='hidden' name='edit_idCliente' id='edit_idCliente'>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="edit_Nombre" class="form-label">Nombre</label>
                                <input type="text" name="edit_Nombre" id="edit_Nombre" class="form-control"
                                    placeholder="Steve Jobs" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="edit_ApellidoP" class="form-label">Apellido Paterno</label>
                                <input type="text" name="edit_ApellidoP" id="edit_ApellidoP" class="form-control"
                                    placeholder="G64190021" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="edit_ApellidoM" class="form-label">Apellido Materno</label>
                                <input type="text" name="edit_ApellidoM" id="edit_ApellidoM" class="form-control"
                                    placeholder="G64190021" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="edit_Tel" class="form-label">Telefono</label>
                                <input type="text" name="edit_Tel" id="edit_Tel" class="form-control"
                                    placeholder="G64190021" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="edit_Correo" class="form-label">Correo</label>
                                <input type="text" name="edit_Correo" id="edit_Correo" class="form-control"
                                    placeholder="G64190021" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="edit_CURP" class="form-label">CURP</label>
                                <input type="text" name="edit_CURP" id="edit_CURP" class="form-control"
                                    placeholder="G64190021" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="edit_Domicilio" class="form-label">Domicilio</label>
                                <input type="text" name="edit_Domicilio" id="edit_Domicilio" class="form-control"
                                    placeholder="G64190021" required>
                            </div>

                            <div class='modal-footer'>
                                <button type='submit' name='edit_data' class='btn btn-primary'>Simpan</button>
                            </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- Modal Delete-->
        <div class='modal fade' style="top:58px !important;" id='deleteModal' tabindex='-1'
            aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Confirmación</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>


                    <form action='hapus.php' method='POST'>

                        <div class='modal-body text-start'>
                            <input type='hidden' name='delete_idCliente' id='delete_idCliente'>
                            <p>¿Estás seguro de que deseas eliminar estos datos?</p>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='deletedata' class='btn btn-primary'>Borrar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- tutup container -->
    </div>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Javascript bule with popper bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- edit function -->
    <script>
        $(document).ready(function () {
            $('.editButton').on('click', function () {
                $('#editModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#edit_idCliente').val(data[0]);
                $('#edit_Nombre').val(data[1]);
                $('#edit_ApellidoP').val(data[2]);
                $('#edit_ApellidoM').val(data[3]);
                $('#edit_Tel').val(data[4]);
                $('#edit_Correo').val(data[5]);
                $('#edit_CURP').val(data[6]);
                $('#edit_Domicilio').val(data[7]);
            });
        });
    </script>

    <!-- delete function -->
    <script>
        $(document).ready(function () {
            $('.deleteButton').on('click', function () {
                $('#deleteModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#delete_idCliente').val(data[0]);
            });
        });
    </script>

    <script>
        function clicking() {
            window.location.href = './index.php';
        }
    </script>
</body>

</html>