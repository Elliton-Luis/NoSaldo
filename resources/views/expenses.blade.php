@extends('layouts.default')
@section('title','despesas')
@section('content')

<div class="container my-5">
    <div class="d-flex flex-wrap gap-4 justify-content-center">
        
        <div style="flex: 1 1 300px; max-width: 400px;">
            @livewire('expenses-form')
        </div>

        <div style="flex: 2 1 600px;">
            @livewire('table-items')
        </div>
    </div>
</div>

@endsection
