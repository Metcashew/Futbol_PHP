<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <style>
        .container{
            position: relative;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 1em;
            width: 1em;
            height: 500px;
            font-family: "Figtree", sans-serif;
            transition: all 400ms;
        }

        .box{
            position: relative;
            background: var(--img) center center;
            background-size: cover;
            transition: all 400ms;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box::after{
            content: attr(data-text);
            position: absolute;
            bottom: 20px;
            background: #000;
            color: #fff;
            padding: 10px 14px;
            letter-spacing: 4px;
            text-transform: uppercase;
            transform: translateY(60px);
            opacity: 0;
            transition: all 400ms;
        }
    </style>
    <title>Jugadores</title>
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <a href="#" class="nav-item nav-link">El club</a>
                <a href="#" class="nav-item nav-link">Aficion</a>
                <a href="#" class="nav-item nav-link">Usuario</a>
                <button class="btn rounded-fill justify-content-between text-secondary" onclick="cambiarTema()"><i class="bi bi-moon"></i></button>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
        </nav>
    </div>
    <br><br><br>
    <div class="container py-4">
        <div class="box box-1" style="--img: url(public/img/memo_ochoa.jpeg);" data-text="Memo Ochoa"></div>
        <div class="box box-1" style="--img: url(public/img/jesus_gallardo.jpeg);" data-text="Jesus Gallardo"></div>
        <div class="box box-1" style="--img: url(public/img/johan_vasquez.jpeg);" data-text="Memo Ochoa"></div>
    </div>
    <div class="row mx-auto">
        <div class="col-md-12">
            <h1>Deportville FC</h1>
            <div class="row mx-auto">
                <table>
                    <thead>
                        <th>Id_Equipo</th>
                        <th>Nombre de Equipo</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        <?php
                            include('include/dbconn.php');

                            $database = new conexion();
                            $db = $database->open();

                            try {
                                $sql = 'SELECT * FROM Equipo';
                                foreach ($db->query($sql) as $row) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['id_equipo'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['nombre_equipo'] ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarModal_<?php echo $row['id_equipo'] ?>" href="">Editar</a>
                                            
                                            <!-- Modal -->
                                            <div class="modal fade" id="editarModal_<?php echo $row['id_equipo'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar equipo</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="edit_equipo.php">
                                                            <div class="row form-group">
                                                                <div class="col-sm-2">
                                                                    <label class="control-label" style="position: relative; top: 7px;">
                                                                        Equipo
                                                                    </label>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <input type="hidden" id="id2" name="id2" value="<?php echo $row['id_equipo']; ?>">
                                                                    <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $row['nombre_equipo']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                                <button type="submit" class="btn btn-primary" name="editar">Guardar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <form method="POST" action="delete_equipo.php">
                                                <input type="hidden" id="id" name="id" value="<?php echo $row['id_equipo']; ?>">
                                                <button type="submit" class="btn btn-danger" name="eliminar">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            catch (PDOException $e) {
                                echo "Error en la conexión". $e->getMessage();
                            }
                            $database->close();
                        ?>
                    </tbody>
                </table>
            </div>
            <form action="add_equipo.php" method="POST">
                <div class="col-md-4">
                    <label for="">Nombre del equipo</label>
                    <input type="text" id="nombre" name="nombre" class="form-control">
                </div>
                <div class="col-md-12">
                    <a href="index.php">Regresar</a>
                    <button type="submit" class="btn btn-primary" name="agregar">Agregar</button>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="public/js/bootstrap.min.js"></script>
</html>