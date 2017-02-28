

@extends('main')

@section('title', '| Blog'  )

@section('content')


<div class="row">
	<div class="col-md-12">
		<h1>Blog</h1>
	</div>
</div>
@foreach ($posts as $post)
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2>{{$post->title}}</h2>
		<h3>Publié le :{{ date('j M, Y h:ia', strtotime($post->created_at)) }}</h3>
		<p>{{substr($post->body,0, 250)}}{{strlen($post->body) > 250 ? '...' : ""}}</p>
		<a href="{{ route('blog.single' ,$post->id)}}" class="btn btn-default">Voir Plus</a>
		<br><br>@include('share', ['url' => 'http://blog.damirmiladinov.com/'])

	</div>

</div>
<hr>

@endforeach

@endsection