@extends('admin.layouts.app')

@section('title', 'Gestão de Produtos')
@section('content')
    <h1>Exibindo os Produtos</h1>
    <a href="{{ route('produts.create') }}">Cadastrar</a>

    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preco</th>
                <th width="100">Acoes</th>
            </tr>
        </thead>
    
    <tbody>
        @foreach ($products as $product )
            <tr>
                <td>{{ $product->name}}</td>
                <td>{{ $product->price}}</td>
                <td>
                    <a href="">Detalhes</a>
                </td>
            </tr>
       @endforeach
    </tbody>
</table>
{!! $products->links() !!}
@endsection