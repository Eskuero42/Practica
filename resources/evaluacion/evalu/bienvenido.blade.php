<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('name')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        header{
            background-color: white;
            justify-content: center;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            align-items: center;
        }
        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            display: inline;
            margin-right: 20%; 
        }
        nav{
            align-items: center;
        }
        footer{
            background-color: beige;
        }
    </style>
</head>
<body>
    <header>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/carro1.jpg" class="d-block mx-auto w-90" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
          </div>             
    </header>
    <div class="p-3 mb-2 bg-light text-dark">
        <nav class="navbar navbar-expand-lg navbar-light >
            <div class="container-fluid">
                    <a class="navbar-brand" href="#"><p class="fs-3">Navegación</p></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><p class="text-uppercase">Inicio</p></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><p class="text-uppercase">Catálogo</p></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><p class="text-uppercase">Pedidos</p></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><p class="text-uppercase">Contactos</p></a>
                        </li>
                        </ul>
                    </div>
            </div>
        </nav>
    </div>
    <br><br>
    <div class="row">
        <div class="col-1">
            
        </div>
        <div class="col-8">
                <div class="card mb-3">
                    <img src="assets/img/banner2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Estilo Minimalista</h5>
                      <p class="card-text">Se basa en líneas limpias, colores neutros y la eliminación 
                        de ornamentos innecesarios. Este enfoque busca resaltar la belleza de lo simple, 
                        priorizando la calidad sobre la cantidad en moda y diseño de interiores. 
                        La esencia del minimalismo radica en la eliminación de lo superfluo para 
                        centrarse en lo esencial, logrando una estética elegante y serena.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Moda Sencilla</h5>
                      <p class="card-text">La moda sencilla se caracteriza por su elegancia sin esfuerzo
                         y su enfoque en prendas básicas y versátiles. Consiste en utilizar piezas 
                         simples y atemporales que pueden combinarse fácilmente entre sí.</p>
                    </div>
                    <img src="assets/img/banner1.jpg" class="card-img-bottom" alt="...">
                </div>
        </div>
        <div class="col-3">
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Prendas básicas</h5>
                  <p class="card-text">Lo más vital para el día a día.</p>
                  <a href="#" class="btn btn-dark">Entrar</a>
                </div>
            </div> 
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Exclusivos</h5>
                    <p class="card-text">Prendas hechas por diseñadores con stock limitado.</p>
                    <a href="#" class="btn btn-dark">Entrar</a>
                </div>
            </div>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">TENDENCIAS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Vestido simple negro</td>
                    </tr>
                    <tr>
                        <td>Camiseta básica blanca</td>
                    </tr>
                    <tr>
                        <td>Pantalones corte recto</td>
                    </tr>
                </tbody>
            </table>
            <div class="card" style="width: 18rem;">
                <img src="assets/img/muestra.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Elegancia Minimalista</h5>
                  <p class="card-text">La moda minimalista celebra la belleza en la simplicidad, 
                    y esta prenda es un claro ejemplo de cómo menos puede ser más.</p>
                </div>
            </div>
            </div>
        </div>
    </div> 
    <footer class="gray-800">
        <p class="fs-4">&copy; 2024 ESKUERO. Todos los derechos reservados</p>
    </footer>
</body>
</html>
