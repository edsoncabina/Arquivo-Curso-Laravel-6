@extends('admin.layouts.app')

@section('title','Cadastrar Novo Produto')

@section('content')
    <h1>Cadastrar Novo Produto</h1>

    <form action="{{ route('produts.store') }}" method="post">
        @csrf
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="description" placeholder="Descrição">
        <button type="submit">Enviar</button>
    </form>
@endsection
