@extends('layouts.default')
@section('title','despesas')
@section('content')
<form method="POST" action="/despesas/analisar">
    @csrf

    <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <input type="number" step="0.01" class="form-control" name="preco" id="preco" placeholder="Ex: 250.00" required>
    </div>

    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Ex: Conta de luz" required>
    </div>

    <div class="mb-3">
        <label for="tipo" class="form-label">Tipo</label>
        <select class="form-select" name="tipo" id="tipo" required>
            <option value="" disabled selected>Selecione o tipo</option>
            <option value="fixo">Fixo</option>
            <option value="variavel">Variável</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="frequencia" class="form-label">Frequência</label>
        <select class="form-select" name="frequencia" id="frequencia" required>
            <option value="" disabled selected>Selecione a frequência</option>
            <option value="daily">Diário</option>
            <option value="weekly">Semanal</option>
            <option value="monthly">Mensal</option>
            <option value="annualy">Anual</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="data_fim" class="form-label">Data de Pagamento</label>
        <input type="date" class="form-control" name="data_fim" id="data_fim" required>
    </div>

    <button type="submit" class="btn btn-primary w-100">Salvar Despesa</button>
</form>

@endsection