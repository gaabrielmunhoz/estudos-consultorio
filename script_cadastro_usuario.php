<?php
include "conecta_bd.php";

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $celular = $_POST["celular"];
    $login = $_POST["login"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    if (empty($nome) || empty($celular) || empty($login) || empty($senha)) {
        $mensagem = "Por favor, preencha todos os campos.";
    } else {
        // Verifica se já existe login igual
        $sql = "SELECT * FROM usuario WHERE login = '$login'";
        $resultado = mysqli_query($conn, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            $mensagem = "Este login já está em uso.";
        } else {
            // Insere o usuário
            $sql = "INSERT INTO usuario (nome_usuario, celular, login, senha)
                    VALUES ('$nome', '$celular', '$login', '$senha')";

            if (mysqli_query($conn, $sql)) {
                $mensagem = "Usuário cadastrado com sucesso!";
            } else {
                $mensagem = "Erro ao cadastrar: " . mysqli_error($conn);
            }
        }
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Usuário</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light d-flex flex-column align-items-center justify-content-center" style="height: 100vh;">
  <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
    <h2 class="mb-3">Cadastro</h2>

    <?php if (!empty($mensagem)): ?>
      <div class="alert alert-info"><?= $mensagem ?></div>
    <?php endif; ?>

    <a href="paginaInicial.php" class="btn btn-primary mt-3">Voltar à Página Inicial</a>
  </div>
</body>
</html>
