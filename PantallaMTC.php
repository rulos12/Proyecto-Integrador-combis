<?php include('Head.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Por Hora</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/styless.css">
</head>

<body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #c84a2e;">
    <div class="container-fluid">
      <a class="navbar-brand" href="Pantalla_Main.php">
        <img src="Imagenes/itst_footer_logo.png" alt="Bootstrap" width="75" height="75">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">
              <h5>Inicio</h5>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="RecoleccionHora.php">Recolección por hora</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="RecoleccionDia.php">Recolección por dia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="DatosGenerales.php">Datos Generales</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="row" style="margin-top: 60px; padding-left: 70px;">
    <div class="col-10">
      <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
        <div id="item-1">
          <h4>Promedio de llegada al tecnologio</h4>
          <p>Las siguientes graficas muestran el promedio de la llega al instituto tecnologio insdustrial</p>
          '
          <?php include('screenMTC.php'); ?>
        </div>
        <div id="item-1-1">

        </div>
        <div id="item-1-2">
          <h5>Promedio por la tarde</h5>
          <p>Esta grafica muestra el promedio que se obtuvo en la recolección de datos por el medio dia de 10:30 a 11:00</p>

        </div>
        <div id="item-2">
          <h4>Item 2</h4>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti dolor hic neque exercitationem at
            consequatur recusandae laboriosam, itaque a, eos doloribus quaerat cumque ex nulla harum vitae amet?
            Dolore enim natus ratione amet non facilis totam dolorum porro dignissimos voluptates sunt ab suscipit
            sequi itaque, dolores, maxime inventore corrupti dicta.</p>
        </div>
        <div id="item-3">
          <h4>Item 3</h4>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti dolor hic neque exercitationem at
            consequatur recusandae laboriosam, itaque a, eos doloribus quaerat cumque ex nulla harum vitae amet?
            Dolore enim natus ratione amet non facilis totam dolorum porro dignissimos voluptates sunt ab suscipit
            sequi itaque, dolores, maxime inventore corrupti dicta.</p>
        </div>
        
        
      </div>
    </div>
    <div class="col-2">
      <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end position-fixed d-none d-md-block sidenav ">
        <nav class="nav   flex-column sidenav">
          <a class="nav-link active  " href="#item-1">MTC Hombres</a>
          <nav class="nav  flex-column sidenav ">
            <a class="nav-link ms-3 my-1" href="#item-1-1">Media</a>
            <a class="nav-link ms-3 my-1" href="#item-1-2">Mediana</a>
            <a class="nav-link ms-3 my-1" href="#item-1-2">Moda</a>
          </nav>
          <a class="nav-link" href="#item-2">MTC Mujeres</a>
          <nav class="nav  flex-column sidenav ">
            <a class="nav-link ms-3 my-1" href="#item-2-1">Media</a>
            <a class="nav-link ms-3 my-1" href="#item-2-2">Mediana</a>
            <a class="nav-link ms-3 my-1" href="#item-2-3">Moda</a>
          </nav>
        </nav>
      </nav>
    </div>
  </div>
</body>

</html>