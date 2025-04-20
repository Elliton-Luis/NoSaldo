@extends('layouts.default')
@extends('components.sidebar')
@section('title','home')
@section('content')
    <div class="container mt-5 w-100">
        <div class="p-4 shadow rounded w-100">
            <div>
                <h1 class="text-center">Análise de Perfil</h1>
                <canvas class="h-75" id="myChart"></canvas>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script>
                const ctx = document.getElementById('myChart');

                new Chart(ctx, {
                    type: 'line',
                    data: {
                    labels: ['Inicio do Mês','Fim do Mês'],
                    datasets: [{
                        label: 'Valor',
                        data: [26, 19,34,12,2,3,4],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                            ],
                            borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(75, 192, 192)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                            ],
                        borderWidth: 5,
                    }]
                    },
                    options: {
                        scales: {
                                y: {
                                beginAtZero: true
                                }
                    }
                    }
                });
            </script>

        </div>
    </div>
@endsection
