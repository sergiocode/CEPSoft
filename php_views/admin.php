<?php
    // Se inicia la session, si no lo está ya
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/CEPSoft/controlers/adminUsers.php";

    if (isset($_SESSION['usuarios'])) {
        $users = $_SESSION['usuarios'];
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Administración</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="../style/font_awesome/css/all.css">
        <script src="../style/font_awesome/js/all.js"></script>

        <link rel="stylesheet" href="../style/admin.css">
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-start">
                <h1 >Administración</h1>
            </div>
            <div class="d-flex justify-content-start">
                <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#crearUsuario">Crear usuario</button>
            </div>
        </div>
        <div class="container mt-3">
            <div class="card">
                <div class="card-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr class="table-dark">
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Contraseña</th>
                                <th scope="col">Correo</th>
                                <!-- <th scope="col">Admin</th> -->
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user) { ?>
                                <tr>
                                    <td><?php echo $user['ID_Usuarios'] ?></td>
                                    <td><?php echo $user['Nombre'] ?></td>
                                    <td><?php echo $user['Apellido'] ?></td>
                                    <td><?php echo $user['NickName'] ?></td>
                                    <td><?php echo $user['Password'] ?></td>
                                    <td><?php echo $user['Correo'] ?></td>
                                    <td>
                                        <form action="editUserForm.php" method="POST">
                                            <button type="submit" class="btn btn-outline-primary btn-sm"><i class="far fa-edit"></i></button>
                                            <input type="hidden" name="id" value="<?php echo $user['ID_Usuarios'] ?>">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="../controlers/deleteUser.php"  method="POST">
                                            <!-- <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#borrarUsuario"
                                            data-id=" echo $user['id'] ?>" data-nombre=" echo $user['Nombre'] ?>"><i class="far fa-trash-alt"></i></button> -->
                                            <button type="submit" class="btn btn-outline-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                                            <input type="hidden" name="id" value="<?php echo $user['ID_Usuarios'] ?>">
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- MODAL CREAR USUARIO -->
        <div class="modal fade" id="crearUsuario" data-bs-keyboard="false" tabindex="-1" aria-labelledby="crearUsuarioModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="crearUsuarioModal">Crear nuevo usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="../controlers/createUser.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="nombre" name="Nombre" placeholder="Nombre" aria-label="Nombre" required autofocus>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="apellido" name="Apellido" placeholder="Apellido" aria-label="Apellido" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="usuario" name="Usuario" placeholder="Usuario" aria-label="Usuario" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" id="correo" name="Correo" placeholder="Correo" aria-label="Usuario" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" id="password" name="Password" placeholder="Password" aria-label="Password" required>
                            </div>
                            <!-- <div class="input-group mb-3">
                                <select name="esadmin" id="esadmin" name="esAdmin" aria-label="esAdmin" required>
                                    <option value="true">Si</option>
                                    <option value="false">No</option>
                                </select>
                            </div> -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary" id="submit" name="submit">Crear usuario</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- MODAL BORRAR USUARIO -->
        <!-- <div class="modal fade" id="borrarUsuario" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>¿Estás seguro de querer eliminar este usuario?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                        <form action="deleteUser.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="inputID">
                            <button type="submit" class="btn btn-danger" id="submit" name="submit">Si</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="admin.js"></script> -->
    </body>
</html>