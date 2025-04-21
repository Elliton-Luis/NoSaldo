@extends('layouts.default')
@section('title','home')
@section('content')
                <h1 class="text-center">Análise de Perfil</h1>
                    <div class="container my-4">
                        <div class="card border-0 shadow-sm p-3">
                            <h5 class="mb-3">
                                <i class="bi bi-graph-up-arrow me-2 text-primary"></i>Resumo de Gastos
                            </h5>
                            
                            <ul class="list-group list-group-flush">

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="bi bi-currency-dollar me-2 text-danger"></i>Total Gasto</span>
                                    <span class="fw-bold">R$ 2.350,80</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="bi bi-tags me-2 text-warning"></i>Categoria Predominante</span>
                                    <span>Alimentação</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="bi bi-clock-history me-2 text-info"></i>Frequência Predominante</span>
                                    <span>Semanal</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="bi bi-calendar-event me-2 text-muted"></i>Último Pagamento</span>
                                    <span>20/04/2025</span>
                                </li>

                            </ul>
                        </div>


                        <div class="container my-4">
                            <div class="card border-0 shadow-sm p-3">
                                <h5 class="mb-3"><i class="bi bi-piggy-bank me-2 text-success"></i>Resumo de Ganhos</h5>
                                
                                <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="bi bi-currency-dollar me-2 text-success"></i>Total Ganho</span>
                                    <span class="fw-bold">R$ 5.780,00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="bi bi-chat-left-text me-2 text-primary"></i>Última Descrição</span>
                                    <span>Freelance de site</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="bi bi-calendar-check me-2 text-muted"></i>Último Recebimento</span>
                                    <span>18/04/2025</span>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                        <div class="container my-4">
                            <div class="card border-0 shadow-sm p-3">
                                <h5 class="mb-3">
                                    <i class="bi bi-calculator me-2 text-dark"></i>Análise Final
                                </h5>

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span><i class="bi bi-dash-circle me-2 text-danger"></i>Diferença (Ganhos - Gastos)</span>
                                        <span class="fw-bold text-success">R$ 3.429,20</span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span><i class="bi bi-bank me-2 text-primary"></i>Total Acumulado</span>
                                        <span class="fw-bold">R$ 8.500,00</span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span><i class="bi bi-cash-coin me-2 text-success"></i>Saldo Atual Estimado</span>
                                        <span class="fw-bold text-primary">R$ 11.929,20</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

@endsection
