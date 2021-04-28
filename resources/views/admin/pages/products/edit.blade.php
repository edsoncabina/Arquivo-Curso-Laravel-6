@extends('admin.layouts.app')

@section('title','Editar Produto')

@section('content')
    <h1>Editar Novo Produto {{ $id }}</h1>

    <form action="{{ route('produts.update',$id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="description" placeholder="Descrição">
        <button type="submit">Enviar</button>
    </form>
@endsection
