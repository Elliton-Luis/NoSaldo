<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - NoSaldo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="d-flex justify-content-center align-items-center bg-light vh-100">
    <div class="container p-4 rounded-4 bg-white shadow-lg" style="max-width: 400px;">
        <div class="text-center mb-4">
            <i class="bi bi-box-arrow-in-right fs-1 text-primary"></i>
            <h3 class="mt-2 text-dark">Bem-vindo</h3>
            <p class="text-muted">Faça login para continuar</p>
        </div>

        @if(Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>
        @endif

        <form method="POST" action="auth">
            @csrf

            <div class="mb-3">
                <label class="form-label text-dark">Email</label>
                <div class="input-group">
                    <span class="input-group-text bg-primary text-white">
                        <i class="bi bi-envelope-fill"></i>
                    </span>
                    <input type="email" class="form-control" name="email" placeholder="exemplo@email.com" required>
                </div>
            </div>

            <div class="mb-2">
                <label class="form-label text-dark">Senha</label>
                <div class="input-group">
                    <span class="input-group-text bg-primary text-white">
                        <i class="bi bi-lock-fill"></i>
                    </span>
                    <input type="password" class="form-control" name="password" id="passwordInput" placeholder="********" required>
                    <span class="input-group-text bg-primary text-white" id="togglePassword" style="cursor: pointer;">
                        <i class="bi bi-eye-fill" id="eyeIcon"></i>
                    </span>
                </div>
            </div>

            <div class="d-flex justify-content-end mb-3">
                <a href="/esqueciSenha" class="text-decoration-none small text-primary">Esqueci minha senha</a>
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-3">
                <i class="bi bi-box-arrow-in-right me-1"></i> Entrar
            </button>

            <div class="text-center">
                <span class="text-muted">Não tem uma conta?</span>
                <a href={{route('login.register')}} class="text-primary fw-semibold text-decoration-none">Cadastre-se</a>
            </div>
        </form>
    </div>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('passwordInput');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', () => {
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
            eyeIcon.classList.toggle('bi-eye-fill');
            eyeIcon.classList.toggle('bi-eye-slash-fill');
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
