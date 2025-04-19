<div class="d-flex flex-column flex-shrink-0 p-3 bg-dark text-white" style="width: 250px; height: 100vh; position: fixed; top: 0; left: 0; z-index: 1050;">
    <h2>NoSaldo</h2>
    <hr>
    <ul class="nav nav-pills nav-flush flex-column mb-auto">
        <li class="nav-item">
            <a href="/inicio" class="nav-link text-white py-3 border-bottom btn btn-secondary text-start" data-bs-toggle="tooltip" data-bs-placement="right">
                <i class="bi bi-house-door fs-4"></i> <span class="ms-2">Início</span>
            </a>
        </li>
        <li>
            <a href="/despesas" class="nav-link text-white py-3 border-bottom btn btn-secondary text-start" data-bs-toggle="tooltip" data-bs-placement="right">
                <i class="bi bi-wallet2 fs-4"></i> <span class="ms-2">Despesas</span>
            </a>
        </li>
        <li>
            <a href="/ganhos" class="nav-link text-white py-3 border-bottom btn btn-secondary text-start" data-bs-toggle="tooltip" data-bs-placement="right">
                <i class="bi bi-cash-coin fs-4"></i> <span class="ms-2">Ganhos</span>
            </a>
        </li>
        <li>
            <a href="/metas" class="nav-link text-white py-3 border-bottom btn btn-secondary text-start" data-bs-toggle="tooltip" data-bs-placement="right">
                <i class="bi bi-bullseye fs-4"></i> <span class="ms-2">Metas</span>
            </a>
        </li>
        <li>
            <a href="/compras" class="nav-link text-white py-3 border-bottom btn btn-secondary text-start" data-bs-toggle="tooltip" data-bs-placement="right">
                <i class="bi bi-cart-fill fs-4"></i> <span class="ms-2">Lista de Compras</span>
            </a>
        </li>
    </ul>

    <div class="mt-auto"></div>
    <hr>
    <div class="dropdown text-center">
        <button class="btn btn-dark dropdown-toggle w-100" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i> <span class="ms-2">Usuário</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="userDropdown">
            <li><a class="dropdown-item" href="/perfil">Perfil</a></li>
            <li><a class="dropdown-item" href="/logout">Sair</a></li>
        </ul>
    </div>
</div>
