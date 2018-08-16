@extends('templates.blog')

@section('title')
	Criar Post
@endsection

@section('content')
	<div class="header">
		<h1>Criar Post</h1>
	</div>
    <hr>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (Session::has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    

	<form method="POST" action="{{ route('posts.store') }}">
	    @csrf
		<div class="form-group">
			<label for="titulo">Titulo:</label>
			<input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo') }}">
	  	</div>
		<div class="form-group">
			<label for="conteudo">Conteudo:</label>
			<textarea name="conteudo" id="conteudo" class="form-control">{{ old('conteudo') }}</textarea>
	  	</div>
	  	<button type="submit" class="btn btn-primary">Salvar</button>
	</form>
@endsection

