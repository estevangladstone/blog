@extends('templates.blog')

@section('title')
	{{ $post->titulo }}
@endsection

@section('content')
	<div class="header">
		<a href="{{ route('posts.edit', $post) }}" class="card-link float-right"><button class="btn btn-outline-success">Editar</button></a>
		<a class="card-link float-right mr-3">
			<form method="POST" action="{{ route('posts.destroy', $post) }}">
				@method('DELETE')
				@csrf
		    	<button type="submit" class="btn btn-outline-danger">Remover</button>
			</form>
		</a>
		<h1>{{ $post->titulo }}</h1>
		<h6 class="text-muted">{{ $post->updated_at->diffForHumans() }}</h6>
	</div>
    <hr>
    <p>{{ $post->conteudo }}</p>
@endsection

