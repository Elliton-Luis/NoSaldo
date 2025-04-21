@extends('layouts.default')
@section('title','despesas')
@section('content')

<div class="mx-auto my-5 p-5 border border-primary rounded" style="max-width: 600px;">
    <form method="POST" action="/despesas/analisar">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-card-text"></i></span>
                <input type="text" class="form-control" name="name" placeholder="Ex: Conta de Água" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Preço</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-currency-dollar"></i></span>
                <input type="number" step="0.01" class="form-control" name="preco" placeholder="Ex: 250.00" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Descrição</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-journal-text"></i></span>
                <input type="text" class="form-control" name="descricao" placeholder="Ex: Conta de luz" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Tipo</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-sliders"></i></span>
                <select class="form-select" name="tipo" required>
                    <option value="" disabled selected>Selecione o tipo</option>
                    <option value="fixo">Fixo</option>
                    <option value="variavel">Variável</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Frequência</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-repeat"></i></span>
                <select class="form-select" name="frequencia" required>
                    <option value="" disabled selected>Selecione a frequência</option>
                    <option value="daily">Diário</option>
                    <option value="weekly">Semanal</option>
                    <option value="monthly">Mensal</option>
                    <option value="annualy">Anual</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Data de Pagamento</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar-event"></i></span>
                <input type="date" class="form-control" name="data_fim" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary w-100">Salvar Despesa</button>
    </form>
</div>

@endsection
