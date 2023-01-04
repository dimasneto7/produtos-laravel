@extends('layouts.template')
@section('title', 'Produto')
@section('content')
<?php
$valor_prod = number_format($produto->valor, 2, ',', '.');
?>
    <div class="jumbotron">
        <h1 class="display-4">{{ $produto->nome }}</h1>
        <p class="lead">{{ $produto->descricao }} - Valor R$ {{ $valor_prod }}</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a href="{{ route('produtos') }}"class="btn btn-primary btn-lg" href="#" role="button">Ver Produtos</a>
      </div>
@endsection
