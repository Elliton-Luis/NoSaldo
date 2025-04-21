@extends('layouts.default')
@section('title','despesas')
@section('content')

<div class="mx-auto my-5 p-5 border border-primary rounded" style="max-width: 600px;">
    @livewire('expenses-form')
</div>

@endsection
