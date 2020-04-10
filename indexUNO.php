<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ('./dotk/00head/analitycs.html'); ?>
  <?php include ('./dotk/00head/cabecera.html'); ?>
  <?php include ('./dotk/00head/estilos.html'); ?>
</head>

<body>

  <a id="arriba"></a>
  <header>
    <!-- Logos e imagen de hidalgo -->
    <?php include ('../lib18/seph/hf/header.html'); ?>

    <nav>
      <!-- Menu principal superior -->
      <?php include ('../lib18/coreFRONTx/01header/nav/menu-superior/menu.html'); ?>
    </nav>

    <?php
      $imgmain="ing-fin";
      $imgfloat="fin-logo";
      $name="Ingeniería Financiera";
      include ('./dotk/01header/carousel-principal/carouselimg.php');
    ?>

  </header>

  <?php include ('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>

  <main>
    <div class="container marketing">







      <!-- Video UPP -->
      <div class="embed-responsive embed-responsive-16by9">
        <iframe width="100%" class="embed-responsive-item" src="https://www.youtube.com/embed/zILtmXy5wlE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>

      <hr/>

      <!-- Main principal -->
      <div>
        <h1>Disposiciones generales para las usuarias y los usuarios</h1>

        <ul>
          <li>Siempre que ingreses al Centro de Investigación Bibliográfica deberás usar
    tu credencial de la Universidad</li>
          <li>En el interior, guardar silencio, no introducir alimentos, ni bebidas</li>
          <li>Responsabilizarte del material de la biblioteca que te sea proporcionado
    bajo cualquier forma de préstamo</li>
          <li>Respetar las fechas de devolución de los libros, cerciorándote que al
    entregarlos, hayan sido descargados de tu registro</li>
          <li>Contribuir a mantener en buen estado el inmueble, mobiliario, equipo de
    cómputo y acervo bibliográfico</li>
          <li>Utilizar las mesas y sillas de la sala de consulta, preferentemente para la
    realización de trabajos, tareas y lectura de libros</li>
          <li>En caso de perder, mutilar o dañar un libro, deberás notificarlo y entregar
    un ejemplar nuevo del mismo título y la misma edición</li>
        </ul>
      </div>

      <!-- Separador -->
      <hr />

      <div id="carousel-indicador" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-indicador" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-indicador" data-slide-to="1"></li>
          <li data-target="#carousel-indicador" data-slide-to="2"></li>
          <li data-target="#carousel-indicador" data-slide-to="3"></li>
          <li data-target="#carousel-indicador" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./images/images_lightbox/img1.jpg" alt="primerSlide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./images/images_lightbox/img2.jpg" alt="segundoSlide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./images/images_lightbox/img3.jpg" alt="terceroSlide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./images/images_lightbox/img4.jpg" alt="cuartoSlide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./images/images_lightbox/img5.jpg" alt="quintoSlide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-indicador" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carousel-indicador" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>

      <hr id="id_servicios">
      <!-- Fin separador -->

      <p>El Centro de Investigación Bibliográfica cuenta con diversos servicios en apoyo
    a la formación académica de la Comunidad Universitaria.</p>

      <ol>
        <li>Acceso a salas de consulta del acervo bibliográfico</li>
        <li>Acceso a sala de consulta informal</li>
        <li>Préstamo a domicilio de material bibliográfico a la comunidad universitaria</li>
        <li>Préstamo de equipos para consulta en línea</li>
        <li>Red inalámbrica</li>
        <li>Reservación de cubículos de estudio grupal</li>
        <li>Servicio de fotocopiado</li>
        <li>Sala de maestros</li>
        <li>Acceso y capacitación de uso de Bases de datos</li>
        <li>Acceso a Nodo de INEGI</li>
        <li><a href="https://www.fonotecanacional.gob.mx/" target="_blank">Acceso a Fonoteca Nacional</a></li>
      </ol>

      <div class="alert alert-success text-center" role="alert">
        Horario de atención: De 7:00 hrs a 20:00 hrs de lunes a viernes
      </div>








      <br />
      <br />
      <a id="mapadesitio"></a>
      <hr class="featurette-divider">
      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include ('../lib18/coreFRONTx/main/tmenu-footer/menufooter.php'); ?>

    </div>

  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php include ('../lib18/seph/hf/footer.html'); ?>
  </footer>

  <?php include ('../lib18/coreFRONTx/09js/java.html'); ?>

  <!-- Script para dar la animacion al boton flotante que lleva arriba -->
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="../lib18/coreFRONTx/10boton-arriba/script.js"></script>

</body>

</html>
