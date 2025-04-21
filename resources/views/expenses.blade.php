@extends('layouts.default')
@section('title','despesas')
@section('content')

<div class="container my-5">
    <div class="d-flex flex-wrap gap-4 justify-content-center">
        <!-- Formulário -->
        <div style="flex: 1 1 300px; max-width: 400px;">
            @livewire('expenses-form')
        </div>

        <!-- Card Único com Expandir/Contrair -->
        <div style="flex: 2 1 600px;">
            @php
                $teste = [1, 2, 3, 4,];
            @endphp

            <!-- Card com Botão para Expandir/Contrair -->
            <div class="card shadow-sm border-0">
                <div class="card-header d-flex justify-content-between align-items-center" id="heading">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-decoration-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseItems" aria-expanded="false" aria-controls="collapseItems">
                            Mostrar Despesas
                        </button>
                    </h5>
                </div>
                <div id="collapseItems" class="collapse" aria-labelledby="heading" data-bs-parent="#accordion">
                    <div class="card-body">
                        @foreach ($teste as $tst)
                            <div class="card shadow-sm border-0 mb-3">
                                <div class="card-body">
                                    @livewire('table-items', ['item' => $tst], key($loop->index))
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
