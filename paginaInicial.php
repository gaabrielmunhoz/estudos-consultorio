<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login ClinicaA</title>
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


  <nav class="navbar bg-body-tertiary">
    <div class="container d-flex justify-content-center">
      <span class="navbar-brand mb-0 h1">Sistema ClínicaA</span>
    </div>
  </nav>

  <div class="form-container">
    <form class="form-box" method="post" action="script_cadastro_usuario.php" id="formCadastro">
      <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Usuário</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Digite seu usuário">
      </div>

      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Senha</label>
        <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Digite sua senha">
      </div>
    <div class="container d-flex justify-content-center mb-3">
      <a href="cadastro_usuario.php">Não tem login? Cadastre-se aqui!</a>
    </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Entrar</button>
      </div>
    </form>
  </div>

</body>
</html>
