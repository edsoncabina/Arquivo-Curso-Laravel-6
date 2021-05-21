@extends('admin.layouts.app')

@section('title', 'Gestão de Produtos')
@section('content')
    <h1>Exibindo os Produtos</h1>
    <a href="{{ route('produts.create') }}">Cadastrar</a>
    <hr>
    @component('admin.components.card')
        @slot('title')
            <h1>Titulo do Card</h1>
        @endslot
        Um card de Exemplo{{-- O conteudo e passado dinamicamente na variavel $slot --}}
    @endcomponent
    <hr>
    @include('admin.includes.alerts', [])
    <hr>
    {{-- Apresentacao dos dados --}}
    <p>{{ $teste }}</p>
    {{-- Estrutura de Repeticao --}}
    @isset($products)
        <h3>Lista de produtos</h3>
        @foreach ($products as $product)
            <P class="@if ($loop->last) last @endif">{{ $product }}</P>
        @endforeach
    @endisset
    <hr>
    @forelse ($products as $product )
        <P class="@if ($loop->first) last @endif">{{ $product }}</P>
    @empty
        <p>Não Exitem produtos cadastrados</p>
    @endforelse
    <hr>
    {{-- Estrutura de Controle --}}
    @if ($valor === 123)
        É igual a 123
    @elseif($valor === 1234)
        É igual a 1234
    @else
        Não é Igual a 123
    @endif

    @unless(false)
        <P>O valor é falso</P>
    @endunless

    @isset($teste)
        <p>A variavel teste existe</p>
    @endisset


@empty($vector)
    <p>A variavel vectos está vazia</p>
@endempty

@auth
    <p>Autenticado</p>
@else
    <p>Não está autenticado</p>
@endauth

@guest
    <p>Não está autenticado</p>
@else
    <p>Autenticado</p>
@endguest
@endsection

@push('styles')
<style>
    .last {
        background: #CCC
    }

</style>
@endpush

@push('scripts')
    <script>
        document.body.style.background = '#efefef';
    </script>
@endpush
