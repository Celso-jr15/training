<?php
  require_once("validar_acesso.php"); 
?>  
<?php
  $chamados = array();

  $arquivo = fopen('arquivo.hd', 'r');


  while (!feof($arquivo)){
     $registro = fgets($arquivo);
     $chamados[] = $registro;
  }
  fclose($arquivo);

  echo '<pre>';
  print_r($chamados);
  echo '</pre>';


?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

      <?php
      include_once("navbar.php");
      ?>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              
            <? foreach($chamados as $chamado) { ?>
              <?= print_r($chamado);?>
              

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">x</h5>
                  <h6 class="card-subtitle mb-2 text-muted">y</h6>
                  <p class="card-text">z</p>

                </div>
              </div>
            <? } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>