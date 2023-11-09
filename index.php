<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Deportville</title>
</head>
<body data-bs-theme="light">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Deportville</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarnav">
          <a class="nav-item nav-link" aria-current="page" href="jugadores.php">Jugadores</a>
          <a class="nav-item nav-link" href="#">El Club </a>
          <a class="nav-item nav-link" href="#">Afiliacion </a>
          <a class="nav-item nav-link" aria-disabled="true">Usuario </a>
          <button class="btn round-fill justify-content-between text-secondary" onclick="cambiarTema()"><i class="bi bi-moon"></i></button>
    </div>
  </div>
</nav>
<main class="container py-4">
    <header>
        <div class="col-md-12">
            <div class="card card-body bg-secondary text-light">
                <div class="row">
                    <div class="col-md-4">
                        <img src="public/images/Chivas.png" alt=""
                        class="img-fluid"
                        data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                    </div>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5 text-dark">Selecciona una imagen</h1>
                            <button type="button" class="btn-Close" data-bs-dismiss="modal" aria-label="Close"> </button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-md-2">
                              <img  src="public/images/Chivas.png" alt=""
                                    class="img-fluid"
                                    data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                              </div>
                              <div class="col-md-10">
                                <input type="file" name="" id="">
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <?php
                      include_once("include/dbconn.php");
                      $database = new conexion();
                      $db = $database->open();
                      try {
                        $sql = 'Select * FROM equipo';
                        $result = $db->query($sql);
                        if ($result) {
                          $row = $result->fetch();
                          if ($row) {
                            echo "<h1>" . $row["nombre_equipo"] ."</h1>";
                          }
                        }
                      } catch (PDOException $e) {
                        echo "Error ". $e->getMessage() ."";
                      }
                      ?>
                      <h3>Conoce mas sobre tu equipo favorito</h3>
                      <p>Checa los ultimos resultaods del equipo</p>
                      <a href="jugadores.php">Ver mas</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="row py-2">
      <div class="col-md-4">
        <div class="card-body-light">
          <h1>Habilidades</h1>
          <!-- Barra1 -->
          <div class="py-3">
            <h1>Velocidad</h1>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 80%;"></div>
            </div>
          </div>
          <!-- Barra2 -->
          <div class="py-3">
            <h1>Destresa</h1>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 80%;"></div>
            </div>
          </div>
          <!-- Barra3 -->
          <div class="py-3">
            <h1>Porcentaje gol</h1>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 80%;"></div>
            </div>
          </div>
          <!-- Barra4 -->
          <div class="py-3">
            <h1>Porcentaje ganado</h1>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 80%;"></div>
            </div>
          </div>
          <!-- Barra5 -->
          <div class="py-3">
            <h1>Resistencia</h1>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 80%;"></div>
            </div>
          </div>
          <!-- Barra6 -->
          <div class="py-3">
            <h1>Velocidad</h1>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 80%;"></div>
            </div>
          </div>
        </div>
      </div>
        <div class="col-md-8">
          <div class="card-bg-light">
            <div class="card-body">
              <h1>Conoce nuestro equipo</h1>
              <ul>
                <li>
              <h3>Apoyanos en nuestro partido</h3>
              <h5>Temporada 2022-20223</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint rem id ipsum! Quae, error. Ullam quasi optio placeat quidem. Commodi non rerum repellendus ipsa cum eos quidem nostrum ipsum beatae.</p>
                </li>
                <li>
              <h3>Apoyanos en nuestro partido</h3>
              <h5>Temporada 2022-20223</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint rem id ipsum! Quae, error. Ullam quasi optio placeat quidem. Commodi non rerum repellendus ipsa cum eos quidem nostrum ipsum beatae.</p>
                </li>
              </ul>
            </div>
          </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card card-body bg-dark">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center text-light">Entrenamientos</h1>
          </div>
            <!-- Card1 -->
          <div class="col-md-4 p-2">
            <div class="card">
              <div class="overflow">
                <img src="public/images/1.jpg" alt="" class="card-img-top">
              </div>
              <div class="card-body">
                <h1>Entrenamiento</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore minima delectus voluptates. Dolores, ipsum. Tenetur consequuntur commodi qui, sed ab veritatis doloribus. Tenetur labore voluptas accusamus doloremque illum est corporis.</p>
              </div>
            </div>
          </div>
            <!-- Card2 -->
            <div class="col-md-4 p-2">
            <div class="card">
              <div class="overflow">
                <img src="public/images/2.jpg" alt="" class="card-img-top">
              </div>
              <div class="card-body">
                <h1>Entrenamiento</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore minima delectus voluptates. Dolores, ipsum. Tenetur consequuntur commodi qui, sed ab veritatis doloribus. Tenetur labore voluptas accusamus doloremque illum est corporis.</p>
              </div>
            </div>
          </div>
            <!-- Card3 -->
            <div class="col-md-4 p-2">
            <div class="card">
              <div class="overflow">
                <img src="public/images/3.jpg" alt="" class="card-img-top">
              </div>
              <div class="card-body">
                <h1>Entrenamiento</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore minima delectus voluptates. Dolores, ipsum. Tenetur consequuntur commodi qui, sed ab veritatis doloribus. Tenetur labore voluptas accusamus doloremque illum est corporis.</p>
              </div>
            </div>
          </div>
          <!-- Card4 -->
          <div class="col-md-4 p-2">
            <div class="card">
              <div class="overflow">
                <img src="public/images/4.jpg" alt="" class="card-img-top">
              </div>
              <div class="card-body">
                <h1>Entrenamiento</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore minima delectus voluptates. Dolores, ipsum. Tenetur consequuntur commodi qui, sed ab veritatis doloribus. Tenetur labore voluptas accusamus doloremque illum est corporis.</p>
              </div>
            </div>
          </div>
          <!-- card5 -->
          <div class="col-md-4 p-2">
            <div class="card">
              <div class="overflow">
                <img src="public/images/5.jpg" alt="" class="card-img-top">
              </div>
              <div class="card-body">
                <h1>Entrenamiento</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore minima delectus voluptates. Dolores, ipsum. Tenetur consequuntur commodi qui, sed ab veritatis doloribus. Tenetur labore voluptas accusamus doloremque illum est corporis.</p>
              </div>
            </div>
          </div>
          <!-- card6 -->
          <div class="col-md-4 p-2">
            <div class="card">
              <div class="overflow">
                <img src="public/images/6.jpg" alt="" class="card-img-top">
              </div>
              <div class="card-body">
                <h1>Entrenamiento</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore minima delectus voluptates. Dolores, ipsum. Tenetur consequuntur commodi qui, sed ab veritatis doloribus. Tenetur labore voluptas accusamus doloremque illum est corporis.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</main>

<script src="funcion.js"></script>
<script src="public/js/bootstrap.min.js"></script>
</body>
</html>