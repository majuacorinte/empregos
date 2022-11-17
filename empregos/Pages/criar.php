<?php
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $empresa = $_POST["empresa"];

    require_once '../Config/conexao.php';

    $query = "INSERT INTO empregos (nome, descr, nomeEmpresa) VALUES ('".$nome."', '".$descricao."', '".$empresa."')";

    $mysqli->query($query);

    header('Location: /empregos/cadastrarVaga.php?sucesso=1');
?>