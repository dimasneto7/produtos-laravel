@extends('layouts.template')
@section('title', 'Página Inicial')
@section('content')
<div class="container">
    <a href="{{ route('produtos.inserir')}}" type="button" class="mt-4 mb-4 btn btn-primary">Inserir Produtos</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Valor</th>
                            <th>Estoque</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($produtos as $produto)
                        <tr>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->valor }}</td>
                            <td>{{ $produto->estoque }}</td>
                            <td>
                                <a href="{{ route('produtos.descricao', $produto->id )}}"><i class="fas fa-eye text-primary mr-2"></i></a>
                                <a href="{{ route('produtos.descricao', $produto->id )}}"><i class="far fa-edit text-info mr-2"></i></a>
                                <a href="{{ route('produtos.descricao', $produto->id )}}"><i class="far fa-trash-alt text-danger mr-2"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    {{-- {{ $produtos->links() }} --}}
</div>

@endsection


