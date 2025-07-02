<?php
include "conecta_bd.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome_usuario = $_POST['nome_usuario'] ?? '';
    $celular = $_POST['celular'] ?? '';
    $login = $_POST['login'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Criptografa a senha
    $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

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
    // Evita acesso direto sem POST
    header("Location: cadastro_usuario.php");
    exit;
}
?>
