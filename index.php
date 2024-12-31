<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
  <title>Torneo</title>
</head>
<body>

<header>
    <nav>

    </nav>


    <div class="containerTitulos">
      <div class="my-2 my-lg-0">
          <h3 class="h3Tienda">Clasificacion</h3>
      </div>
    </div>


    


      <form action="recibe_excel_validando.php" method="POST" enctype="multipart/form-data"/>
      
        <div class="botones">
            <input  type="file" name="dataCliente" class="file-input__input"/>
            <label class="file-input__label" for="file-input">
              <i class="zmdi zmdi-upload zmdi-hc-2x"></i>
              <span>Elegir Archivo Excel</span></label>

              <div class="text-center mt-5">
          <input type="submit" name="subir" class="btn-enviar" value="Subir Excel"/>

            </div>     
          </div>

      
      </form>
    
</header>

<div class="titulo"><H2>EQUIPOS CLASIFICADOS</H2> </i></div>

<div class="container">

  

      <div class="col-md-5">
    <?php
    header("Content-Type: text/html;charset=utf-8");
    include('config.php');
    $sqlClientes = ("SELECT * FROM clasificacion INNER JOIN regiones on clasificacion.idRegion = regiones.idRegion WHERE clasificacion.idRegion = 1 ORDER BY codigo ASC;");

    $queryData   = mysqli_query($con, $sqlClientes);
    $total_client = mysqli_num_rows($queryData);

    ?>

        

          <table class="tablita" >
          <h1>ASIA</h1>
            <thead>
              <tr>
                <th>CODIGO</th>
                <th>NOMBRE DEL EQUIPO</th>
                <th>COPAS</th>
                <th>JUGADORES</th>
                <th>MEJOR BRAWLER</th>
                <th>REGION</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $i = 1;
              while ($data = mysqli_fetch_array($queryData)) { ?>
              <tr>
              <td><?php echo $i++; ?> </td>
                <td><?php echo $data['nombreDelEquipo']; ?></td>
                <td><?php echo $data['copas']; ?></td>
                <td><?php echo $data['jugadores']; ?></td>
                <td><?php echo $data['mejorBrawler']; ?></td>
                <td><?php echo $data['nombreContinente']; ?></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>

      </div>

      <div class="col-md-5">
    <?php
    $sqlClientes = ("SELECT * FROM clasificacion INNER JOIN regiones on clasificacion.idRegion = regiones.idRegion WHERE clasificacion.idRegion = 2 ORDER BY codigo ASC;");

    $queryData   = mysqli_query($con, $sqlClientes);
    $total_client = mysqli_num_rows($queryData);

    ?>

      

          <table class="tablita" >
          <h1>AFRIA</h1>
            <thead>
              <tr>
                <th>CODIGO</th>
                <th>NOMBRE DEL EQUIPO</th>
                <th>COPAS</th>
                <th>JUGADORES</th>
                <th>MEJOR BRAWLER</th>
                <th>REGION</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $i = 1;
              while ($data = mysqli_fetch_array($queryData)) { ?>
              <tr>
              <td><?php echo $i++; ?> </td>
                <td><?php echo $data['nombreDelEquipo']; ?></td>
                <td><?php echo $data['copas']; ?></td>
                <td><?php echo $data['jugadores']; ?></td>
                <td><?php echo $data['mejorBrawler']; ?></td>
                <td><?php echo $data['nombreContinente']; ?></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>

      </div>

     

 </div>

<div class="container">

    <div class="col-md-5">
        <?php
        $sqlClientes = ("SELECT * FROM clasificacion INNER JOIN regiones on clasificacion.idRegion = regiones.idRegion WHERE clasificacion.idRegion = 3 ORDER BY codigo ASC;");

        $queryData   = mysqli_query($con, $sqlClientes);
        $total_client = mysqli_num_rows($queryData);

        ?>

          

              <table class="tablita" >
              <h1>AMERICA DEL NORTE</h1>
                <thead>
                  <tr>
                    <th>CODIGO</th>
                    <th>NOMBRE DEL EQUIPO</th>
                    <th>COPAS</th>
                    <th>JUGADORES</th>
                    <th>MEJOR BRAWLER</th>
                    <th>REGION</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $i = 1;
                  while ($data = mysqli_fetch_array($queryData)) { ?>
                  <tr>
                  <td><?php echo $i++; ?> </td>
                    <td><?php echo $data['nombreDelEquipo']; ?></td>
                    <td><?php echo $data['copas']; ?></td>
                    <td><?php echo $data['jugadores']; ?></td>
                    <td><?php echo $data['mejorBrawler']; ?></td>
                    <td><?php echo $data['nombreContinente']; ?></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>

          </div>

          
          <div class="col-md-5">
        <?php
        $sqlClientes = ("SELECT * FROM clasificacion INNER JOIN regiones on clasificacion.idRegion = regiones.idRegion WHERE clasificacion.idRegion = 4 ORDER BY codigo ASC;");

        $queryData   = mysqli_query($con, $sqlClientes);
        $total_client = mysqli_num_rows($queryData);

        ?>

          

              <table class="tablita" >
              <h1>AMERICA DEL SUR</h1>
                <thead>
                  <tr>
                    <th>CODIGO</th>
                    <th>NOMBRE DEL EQUIPO</th>
                    <th>COPAS</th>
                    <th>JUGADORES</th>
                    <th>MEJOR BRAWLER</th>
                    <th>REGION</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $i = 1;
                  while ($data = mysqli_fetch_array($queryData)) { ?>
                  <tr>
                  <td><?php echo $i++; ?> </td>
                    <td><?php echo $data['nombreDelEquipo']; ?></td>
                    <td><?php echo $data['copas']; ?></td>
                    <td><?php echo $data['jugadores']; ?></td>
                    <td><?php echo $data['mejorBrawler']; ?></td>
                    <td><?php echo $data['nombreContinente']; ?></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>

          </div>
        </div>

    </div>


</div>

</div>

</div>
<script src="js/jquery.min.js"></script>
<script src="'js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>