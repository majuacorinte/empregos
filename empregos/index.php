<?php 
  require_once 'pages/header.php';
?>
  
<body>
  <main>
    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Agregador de Vagas</h1>
          <p class="lead text-muted">Comece por aqui</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Está procurando um emprego?</a>
            <a href="cadastrarVaga.php" class="btn btn-secondary my-2">Cadastrar Vaga!</a>
          </p>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php 

            require_once 'Config/conexao.php';

            $query = "SELECT * FROM empregos";

            if ($result = $mysqli->query($query)) {
              while ($row = $result->fetch_assoc()) {
                  echo '
                  <div class="col">
                  <div class="shadow-sm">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">'.$row["nome"].'</h5>
                        <p class="card-text">'.substr($row["descr"], 0, 100).'</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <a href="#" class="btn btn-sm btn-outline-secondary stretched-link">Ver vaga</a>
                          <small class="d-flex">
                          <!-- <img class="" src="microsoft.png" alt="Microsoft" height="20px">&nbsp; -->Empresa: '.$row["nomeEmpresa"].'
                          </small>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>

                  ';
              }
          
              $result->close();
          }
          ?>
        
          
        </div>
      </div>
    </div>
  </main>
  </body>

<?php 
  require_once 'pages/footer.php';
?>