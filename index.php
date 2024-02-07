<!DOCTYPE html>

<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lokura</title>
  <link rel="stylesheet" href="estilos.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

</head>
<?php

$server = "localhost";
$bbdd = "superheroes";
$user = "root";
$passwd = "";

$conn = mysqli_connect($server, $user, $passwd, $bbdd);
//if (!$conn) {

//echo "error de conexion";
//} else {
// echo "Conexion establecida";
//}


?>

<body>


  <!-- Navbar -->
  <!-- Navbar -->
  <!-- Navbar -->



  <nav>

    <a id="logo" href="index.html">Marvel</a>


    <div class="nav-items">
      <ul>
        <li class="nav-item"><a href="index.html">Home</a></li>
        <li class="nav-item"> <a href="personajes.html">Personajes</a></li>
      </ul>
    </div>




  </nav>

  <!-- Hero -->
  <!-- Hero -->
  <!-- Hero -->

  <section class="hero">

    <div class="hero-box">

      <h1 class="hero-h1">Superhéroes <br><span>Marvel</span></h1>
      <a href="personajes.html"><button class="hero-button">¡Descúbrelos!</button></a>
    </div>

  </section>



  <!-- Contenido personajes -->
  <!-- Contenido personajes -->
  <!-- Contenido personajes -->

  <section class="container">
    <div class="caja-titulo">
      <h2 class="superheroes-title">Todos los Personajes</h2>
    </div>
    <!-- Primera seccion  -->
    <!-- Primera seccion  -->

    <div class="container-row">

      <!-- While with Boxex FUERZAS-->
      <?php
      $consulta = "SELECT nombre, imagen, frase FROM superheroe LIMIT 4";
      $resultado = mysqli_query($conn, $consulta);

      while ($registro_fuerza = mysqli_fetch_assoc($resultado)) {
        ?>

        <div class="box">
          <img src="img/<?php echo $registro_fuerza['imagen']; ?>">
          <div class="text-box">
            <div class="text">
              <h4 class="superhero-name">
                <?php echo $registro_fuerza['nombre']; ?>
              </h4>
              <p class="superhero-desc">
                <?php echo $registro_fuerza['frase']; ?>
              </p>
            </div>
          </div>
        </div>

        <?php
      }
      ?>

    </div>

    <!-- Segunda seccion  -->
    <!-- Segunda seccion  -->
    <!-- Segunda seccion  -->

    <div class="caja-titulo">
      <h2 class="superheroes-title">Filtro por Fuerza</h2>
    </div>

    <!-- Boxes  -->

    <div class="container-row">

      <!-- While with Boxex FUERZAS-->
      <?php
      $consulta = "SELECT nombre, imagen, fuerza FROM superheroe WHERE fuerza >= 2 LIMIT 4";
      $resultado = mysqli_query($conn, $consulta);

      while ($registro_fuerza = mysqli_fetch_assoc($resultado)) {
        ?>

        <div class="box">
          <img src="img/<?php echo $registro_fuerza['imagen']; ?>">
          <div class="text-box">
            <div class="text">
              <h4 class="superhero-name">
                <?php echo $registro_fuerza['nombre']; ?>
              </h4>
              <p class="superhero-desc">Nivel de fuerza:<strong>
                  <?php echo $registro_fuerza['fuerza']; ?>
                </strong>
              </p>
            </div>
          </div>
        </div>

        <?php
      }
      ?>

    </div>

    <div class="caja-titulo">
      <h2 class="superheroes-title">Filtro por Categoria</h2>
    </div>
    <!-- While with Boxex categoria-->

    <div class="container-row">
      <?php

      $consulta = "SELECT nombre, imagen, categoria FROM superheroe ORDER BY categoria LIMIT 4";
      $resultado = mysqli_query($conn, $consulta);

      while ($registro_categoria = mysqli_fetch_assoc($resultado)) {
        ?>

        <div class="box">
          <img src="img/<?php echo $registro_categoria['imagen']; ?>">
          <div class="text-box">
            <div class="text">
              <h4 class="superhero-name">
                <?php echo $registro_categoria['nombre']; ?>
              </h4>
              <p class="superhero-desc">Categoria:<strong>
                  <?php echo $registro_categoria['categoria']; ?>
                </strong>
              </p>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>


    <div class="caja-titulo">
      <a name="go-filter"><h2 id="go-filter" class="superheroes-title">Filtrar por Categorias o Fuerza</h2></a>

      <div class="filtro">
        <form action="" method="GET">
          <select id="filtro" name="filtro">
            <option value="categoria">Categoría</option>
            <option value="fuerza">Fuerza</option>
            <option value="frase">Frase</option>

          </select>
          <a href="#go-filter"><button class="filter-button" type="submit">Filtrar</button></a>
        </form>
      </div>
    </div>


    <div class="container-row">
      <?php

      $consulta = "SELECT nombre, imagen, categoria, fuerza, frase FROM superheroe";
      $resultado = mysqli_query($conn, $consulta);

      while ($registro_superheroe = mysqli_fetch_assoc($resultado)) {
        ?>

        <div class="box">
          <img src="img/<?php echo $registro_superheroe['imagen']; ?>">
          <div class="text-box">
            <div class="text">
              <h4 class="superhero-name">
                <?php echo $registro_superheroe['nombre']; ?>
              </h4>
              <?php
              if ($_GET["filtro"] == 'categoria') {
                echo "<p class='superhero-desc'>Categoría: <strong>" . $registro_superheroe['categoria'] . "</strong></p>";
              } else if ($_GET["filtro"] == 'fuerza') {
                echo "<p class='superhero-desc'>Fuerza: <strong>" . $registro_superheroe['fuerza'] . "</strong></p>";
              } else {
                echo "<p class='superhero-desc'>" . $registro_superheroe['frase'] . "</p>";
              }
              ?>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>




    <div class="container-row">
      <div class="filtro">
        <form class="form" action="" method="GET">
          <select id="filtro" name="filtro">
            <option value="categoria">Categoria</option>
            <option value="frase">Frase</option>
            <option value="fuerza">Fuerza</option>
            </select>
            <button class="filter-button" type="submit">Filtrar</button>
         
        </form>
      </div>

     
      <?php
      $consulta = "SELECT nombre, categoria, frase, imagen, fuerza";
      $resultado = mysqli_query($conn, $consulta);

      while ($registro_personajes = mysql_fetch_assoc($resultado)) {

        ?>
        <div class="box">


          <img src="img/<?php echo $registro_personajes['imagen']; ?>">

          <div class="text-box">

            <div class="text">

              <h6 class="superhero-name">
                <?php echo $registro_personajes['nombre'] ?>
              </h6>
              <?php 
              
              if ($_GET = ['filtro'] == 'categoria'){

                  echo "<p class='superhero-desc'>Categoria: " . $registro_personajes['categoria'] . "</p>";

              } else if ($_GET = ['filtro'] == 'fuerza'){

                echo "<p class='superhero-desc'>Fuerza: " .  $registro_personajes ['fuerza'] . "</p>";
              } else {

                echo "<p class='superhero-desc'>Frase: " . $registro_personajes ['frase'] . "</p>"; 

              
              }
              
          
              ?></p>
            </div>


          </div>



        </div>
        <?php
      }
      ?>














  </section>





















</body>

</html>