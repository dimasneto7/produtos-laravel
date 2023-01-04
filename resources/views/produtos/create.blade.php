@extends('layouts.template')
@section('title', 'Criar Produto')
@section('content')
<div class="container mt-10">
    <form method="POST" action="{{ route('produtos.insert') }}">
        @csrf
       <div class="row">
           <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="" name="nome">
                </div>
           </div>
        </div>
        <div class="row">
           <div class="col-md-4">
                <div class="form-group">
                    <label for="estoque">Estoque</label>
                    <input type="text" class="form-control" id="" name="estoque">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="text" class="form-control" id="" name="valor">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" id="" name="descricao" rows="3"></textarea>
                </div>
            </div>
       </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
