<form method="POST" action="{{ route('store.expenses') }}" class="p-4 rounded shadow-sm bg-white">
    @csrf

    <h2 class="text-center mb-4">
        <i class="bi bi-wallet2 me-2 text-primary"></i>Cadastro de Gastos
    </h2>

    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-journal-text"></i></span>
            <input type="text" class="form-control" name="description" placeholder="Ex: Conta de luz" required>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Preço</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-currency-dollar"></i></span>
            <input type="number" step="0.01" class="form-control" name="price" placeholder="Ex: 250.00" required>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Tipo de Gasto</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-sliders"></i></span>
            <select class="form-select" name="type" required wire:model.lazy="type">
                <option value="" disabled selected>Selecione o tipo</option>
                <option value="variable">Variável</option>
                <option value="fix">Fixo</option>
            </select>
        </div>
    </div>

    @if ($type == 'fix')
    <div class="mb-3">
        <label class="form-label">Frequência</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-repeat"></i></span>
            <select class="form-select" name="frequency" required>
                <option value="" disabled selected>Selecione a frequência</option>
                <option value="daily">Diário</option>
                <option value="weekly">Semanal</option>
                <option value="monthly">Mensal</option>
                <option value="annualy">Anual</option>
            </select>
        </div>
    </div>
    @endif

    <div class="mb-4">
        <label class="form-label">Data de Pagamento</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-calendar-event"></i></span>
            <input type="date" class="form-control" name="due_date" required>
        </div>
    </div>
    <button type="submit" class="btn btn-primary w-100">
        <i class="bi bi-check-circle me-1"></i>Salvar Despesa
    </button>
</form>
