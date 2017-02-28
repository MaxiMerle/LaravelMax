@extends('main')
@section('title', '| Accueil')
@section('content')

      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Bienvenue sur le Blog Laravel</h1>
            <p class="lead">Un blog simple et responsive fait avec laravel ! </p>
          </div>
        </div>
      </div>
      <!-- end of header .row -->

      <div class="row">
        <div class="col-md-12">
        @foreach($posts as $post)
          <div class="post">
            <h3>{{$post->title}}</h3>
            <p>{{ substr($post->body,0 ,300)}}{{ strlen($post->body) > 300 ? "..." : "" }}</p>
            <a href="{{ route('posts.show' , $post->id) }}" class="btn btn-primary">Lire</a>
          </div>

          <hr>
        @endforeach


    </div>
    <!-- end of .container -->
@endsection