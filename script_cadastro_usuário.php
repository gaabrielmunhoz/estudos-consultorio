<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cadastro de usuário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #f8f9fa;
      height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .form-container {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .form-box {
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }
  </style>
</head>
<body>

<?php
include "conecta_bd.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome_usuario = $_POST['nome_usuario'] ?? '';
    $celular = $_POST['celular'] ?? '';
    $login = $_POST['login'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

    var_dump($_POST);
    exit;

    $sql = "INSERT INTO usuario (nome_usuario, celular, login, senha) 
            VALUES ('$nome_usuario', '$celular', '$login', '$senhaCriptografada')";

    if (mysqli_query($conn, $sql)) {
        echo "<div class='alert alert-success text-center mt-4'>Usuário cadastrado com sucesso!</div>";
        echo "<div class='text-center'><a href='paginaInicial.php' class='btn btn-primary mt-3'>Voltar para página inicial</a></div>";
    } else {
        echo "<div class='alert alert-danger text-center mt-4'>Erro ao cadastrar usuário: " . mysqli_error($conn) . "</div>";
    }

    mysqli_close($conn);
} else {
    header("Location: cadastro_usuario.php");
    exit;
}
?>
