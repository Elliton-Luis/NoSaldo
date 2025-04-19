<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="d-flex justify-content-center align-items-center bg-light vh-100">
    <div class="container p-4 rounded bg-dark text-white shadow" style="max-width: 400px;">
        <h3 class="text-center mb-4">Login</h3>
        @if(Session::has('errorAuth'))
        <div class="alert alert-danger" role="alert">
            {{Session::get('errorAuth')}}
        </div>

        @endif
        <form method="POST" action="auth">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text bg-secondary text-white">
                        <i class="bi bi-person-fill"></i>
                    </span>
                    <input type="email" id="email" class="form-control" name="email" placeholder="Digite seu email" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <div class="input-group">
                    <span class="input-group-text bg-secondary text-white">
                        <i class="bi bi-lock-fill"></i>
                    </span>
                    <input type="password" id="password" class="form-control" name="password" placeholder="Digite sua senha" required>
                </div>
            </div>
            <button type="submit" class="btn btn-light w-100">Entrar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
