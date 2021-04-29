@extends('admin.layouts.app')

@section('title','Cadastrar Novo Produto')

@section('content')
    <h1>Cadastrar Novo Produto</h1>

    <form action="{{ route('produts.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="description" placeholder="Descrição">
        <input type="file" name="photo" >
        <button type="submit">Enviar</button>
    </form>
@endsection
