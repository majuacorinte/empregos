<?php

require_once 'pages/header.php';

?>

<div class="container cadastro">
    <div class="row">
        <?php 
            if(isset($_GET["sucesso"])){
                echo '<div class="alert alert-success" role="alert">
                        Cadastro concluído com sucesso!
                      </div>';
            }
        ?>
        <h1>Criação de Vaga de Emprego</h1>
    </div>
    <div class="row flex-center">
        <div class="form">
            <form class="form" action="pages/criar.php" method="POST">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome da Vaga</label>
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Desenvolvedor Web, Engenheiro de Software...">
                </div>            
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea class="form-control" name="descricao" id="descricao" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="empresa" class="form-label">Nome da Empresa</label>
                    <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Microsoft, Apple, Google...">
                </div>
                    <input type="submit" class="btn btn-primary mb-3">
            </form>
        </div>
    </div>
</div>

<?php 
    require_once 'pages/footer.php';
?>