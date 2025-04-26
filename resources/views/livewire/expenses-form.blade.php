<form wire:submit="storeExpenses" class="p-4 rounded shadow-sm bg-white">
    @csrf

    <h2 class="text-center mb-4">
        <i class="bi bi-wallet2 me-2 text-primary"></i>Cadastro de Gastos
    </h2>

    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{Session('success')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    

    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-journal-text"></i></span>
            <input type="text" class="form-control" wire:model="description" placeholder="Ex: Conta de luz" required>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Preço</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-currency-dollar"></i></span>
            <input type="number" step="0.01" class="form-control" wire:model="price" placeholder="Ex: 250.00" required>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Tipo de Gasto</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-sliders"></i></span>
            <select class="form-select" required wire:model.lazy="type">
                <option value="">Selecione o tipo</option>
                <option value="variable">Variável</option>
                <option value="fixed">Fixo</option>
            </select>
        </div>
    </div>

    @if ($type == 'fixed')
    <div class="mb-3">
        <label class="form-label">Frequência</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-repeat"></i></span>
            <select class="form-select" wire:model="frequency" required>
                <option value="">Selecione a frequência</option>
                <option value="daily">Diário</option>
                <option value="weekly">Semanal</option>
                <option value="monthly">Mensal</option>
                <option value="annually">Anual</option>
            </select>
        </div>
    </div>
    @endif

    <div class="mb-3">
        <label class="form-label">Categoria</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-box"></i></span>
            <select class="form-select" wire:model="category" required>
                <option value="">Selecione a categoria</option>
                <option value="food">Alimentação</option>
                <option value="fun">Lazer</option>
                <option value="utility">Utilidades</option>
                <option value="other">Outro</option>
            </select>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Parcelas</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-currency-dollar"></i></span>
            <input type="number" class="form-control" wire:model="" placeholder="Ex: 1" required>
        </div>
    </div>

    <div class="mb-4">
        <label class="form-label">Data de Pagamento</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-calendar-event"></i></span>
            <input type="date" class="form-control" wire:model="due_date" required>
        </div>
    </div>
    <button type="submit" class="btn btn-primary w-100">
        <i class="bi bi-check-circle me-1"></i>Salvar Despesa
    </button>
</form>
