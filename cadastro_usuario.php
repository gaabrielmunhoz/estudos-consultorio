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

  <div class="form-container">
    <form class="form-box" method="POST" action="script_cadastro_usuario.php" id="formCadastro">
        <h1 class="h4 mb-4 text-center">Cadastro de usuário</h1>

        <div class="mb-2">
            <label for="nome_usuario" class="form-label">Nome completo:</label>
            <input name="nome_usuario" type="text" class="form-control" id="nome_usuario" placeholder="Digite o nome completo" required>
        </div>

        <div class="mb-2">
            <label for="login" class="form-label">Email:</label>
            <input name="login" type="email" class="form-control" id="login" placeholder="Digite o email" required>
        </div>

        <div class="mb-2">
            <label for="celular" class="form-label">Celular:</label>
            <input name="celular" type="tel" class="form-control" placeholder="Digite o número de celular" id="celular">
        </div>

        <div class="mb-2">
            <label for="senha" class="form-label">Senha:</label>
            <input name="senha" type="password" class="form-control" id="senha" placeholder="Digite a senha" required>
        </div>

        <div class="mb-3">
            <label for="confirmarSenha" class="form-label">Confirmar senha:</label>
            <input type="password" class="form-control" id="confirmarSenha" placeholder="Confirmar senha" required>
            <div class="invalid-feedback">As senhas não coincidem.</div>
        </div>

        <div class="d-flex justify-content-center gap-2">
            <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='paginaInicial.php'">Voltar</button>
            <button type="submit" class="btn btn-outline-success">Cadastrar</button>
        </div>
    </form>
  </div>

    <script>
        const form = document.getElementById("formCadastro");
        const senha = document.getElementById("senha");
        const confirmarSenha = document.getElementById("confirmarSenha");

        form.addEventListener("submit", function (e) {
            if (senha.value !== confirmarSenha.value) {
                e.preventDefault(); // Impede o envio do formulário
                confirmarSenha.classList.add("is-invalid");
            } else {
                confirmarSenha.classList.remove("is-invalid");
            }
        });
    </script>

</body>
</html>

