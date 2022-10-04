<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VIVLTDG</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/main.css">
</head>
<body>

  <header class="container-fluid bg-primary d-flex justify-content-center">
    <p class="text-light mb-0 p-2 fs-6">Contactenos (+57) 314-822-7300</p>
  </header>

  <nav class="navbar navbar-expand-lg bg-light p-3" id="menu">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <span class="text-primary fs-5 fw-bold">VIVLTDG</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
          </li>

           <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="rol/index.blade.php">Registrar Rol</a>
          </li>

           <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="usuario/index.blade.php">Usuarios</a>
          </li>

           <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="empresas/index.blade.php">Empresas</a>
          </li>
          
             
            </ul>
          </li>
        </div>
      </div>
    </nav>

    @yield('content')
  
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active" data-bs-interval="3000">
          <img src="./img/Slider1.png" class="d-block w-100" alt="Slider1">
        </div>

        <div class="carousel-item" data-bs-interval="3000">
          <img src="./img/Slider2.png" class="d-block w-100" alt="Slider2">
        </div>

        <div class="carousel-item" data-bs-interval="3000">
          <img src="./img/Slider3.jpg" class="d-block w-100" alt="Slider3">
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <section class="w-50 mx-auto text-center pt-5" id="intro">
      <h1 class="p-3 fs-2 border-top border-3">Una plataforma unica para tus necesidades<span class="text-primary"> Marketing Digital</span></h1>
      <p class="p-3 fs-4"><span class="text-primary">VIVLTDG</span> Es la plataforma donde te ayudamos a establecer tus eventos online. Seo, Paginas Web, Empresas, Tiendas Virtuales, Redes sociles</p>
    </section>

    <section class="container-fluid">
     <div class="row w-75 mx-auto my-5 servicio-fila">
       <div class="col-lg-6 col-md-12 col-sm-12">
         <img src="img/desarrollo.jpg" alt="desarrollo" width="180" height="160">
         <div>
           <h3 class="fs-5 mt-4 px-4 pb-1">Desarrollo</h3> 
           <p class="px-4">Desarrollo de aplicaciones WEB, Moviles y E-commerce</p>
         </div>
       </div>
       <div class="col-lg-6 col-md-12 col-sm-12">
         <img src="img/beneficios.jpg" alt="beneficios" width="180" height="160">
         <div>
           <h3 class="fs-5 mt-4 px-4 pb-1">Beneficios</h3> 
           <p class="px-4">Beneficios y agenda de eventos para conocer</p>
         </div>
       </div>
       <div class="col-lg-6 col-md-12 col-sm-12">
         <img src="img/visitas.jpg" alt="visiitas" width="180" height="160">
         <div>
           <h3 class="fs-5 mt-4 px-4 pb-1"> La calidad de las visitas</h3> 
           <p class="px-4">apuntar directamente a aquellas personas que tengan mayores
             chances de convertirse en 
           oportunidades </p>
         </div>
       </div>
       <div class="col-lg-6 col-md-12 col-sm-12">
         <img src="img/emprender.jpg" alt="emprender" width="180" height="160">
         <div>
           <h3 class="fs-5 mt-4 px-4 pb-1">Innovar, Crecer</h3> 
           <p class="px-4">Herramientas de capacitacion para PyMEs.</p>
         </div>
       </div>
     </div>
   </section>
   <section>
    <div class="w-50 m-auto text-center" id="equipo">
      <h1 class="mb-5 fs-2">Equipo pequeño con <span class="text-primary">resultados Grandes</span></h1>
      <p class="fs-4">Siempre buscamos las personas adecuadas para que trabajen con nosotros. Si te sientes listo para este reto, te esperamos para que te unas a nosotros</p>
    </div>
    <div class="mt-5 text-center">
      <img class="img-fluid" src="img/equipo.jpg" alt="equipo">
    </div>
  </section>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>