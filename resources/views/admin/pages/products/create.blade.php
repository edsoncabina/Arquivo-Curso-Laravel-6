@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Produto')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>Cadastrar Novo Produto</h1>

    <form action="{{ route('produts.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Nome:">
        <input type="text" name="description" value="{{ old('description') }}" placeholder="Descrição">
        <input type="file" name="photo">
        <button type="submit">Enviar</button>
    </form>
@endsection
