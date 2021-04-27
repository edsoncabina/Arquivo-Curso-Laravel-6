@extends('admin.layouts.app')

@section('title', 'Gestão de Produtos')
@section('content')
<h1>Exibindo os Produtos</h1>
<p>{{$teste}}</p>

@if ($valor === 123)
    É igual a 123
    @elseif($valor === 1234)
    É igual a 1234
    @else
    Não é Igual a 123
@endif

@unless (false)
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
