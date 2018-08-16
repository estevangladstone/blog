@extends('templates.blog')

@section('title')
	Home
@endsection

@section('content')
	<a href="{{ route('posts.create') }}" class="float-right"><button class="btn btn-primary">Criar Post</button></a>
	<h1>Posts</h1>

	@if (Session::has('message'))
	    <div class="alert alert-success">
	        {{ session('message') }}
	    </div>
	@endif
	
	<hr>
	@foreach($posts as $post)
		<div class="card post">
			<div class="card-body">
			    <a href="{{ route('posts.show', $post) }}"><h5 class="card-title">{{ $post->titulo }}</h5></a>
			    <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->diffForHumans() }}</h6>
			    <p class="card-text">{{ str_limit($post->conteudo, 50, ' (...)') }}</p>
			</div>
		</div>
		<br>
	@endforeach
@endsection