<?php
    require_once 'pages/header.php';
?>

<link rel="stylesheet" href="Style/login.css">

<body class="text-center">
    <main class="form-signin w-100 m-auto">
      <form class="form-login">
        <img class="mb-4" src="Public/login.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 fw-normal">Registro</h1>
    
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="" placeholder="nome@exemplo.com">
          <label for="email">Endereço de Email</label>
        </div>
        <div class="form-floating">
          <input type="password" name="senha" class="form-control" id="" placeholder="Senha">
          <label for="senha">Senha</label>
        </div>
        <div class="form-floating">
          <input type="password" name="confSenha" class="form-control" id="" placeholder="Confirmar Senha">
          <label for="confSenha">Confirmar Senha</label>
        </div>
        <div class="form-floating">
          <input type="text" name="empresa" class="form-control" id="" placeholder="Nome da Empresa">
          <label for="empresa">Empresa</label>
        </div>
    
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Lembrar-me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Registrar</button>
        <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p> -->
      </form>
    </main>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>