@extends('main')

@section('title','| Ajout Post')


@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2>Ajouter un Article</h2>
		<hr>

		{!! Form::open(array('route' => 'posts.store', 'files' => true)) !!}
    		{{ Form::label('title', 'Titre:') }}
    		{{ Form::text('title', null, array('class' => 'form-control')) }}

    		{{ Form::label('featured_img', 'Ajouter un image') }}
            {{ Form::file('featured_img') }}

    		{{ Form::label('body' , 'Contenu:')}}
    		{{ Form::textarea('body', null, array('class' => 'form-control'))}}

    		{{Form::submit('Ajouter un Article', array('class' =>'btn btn-success btn-lg btn-block'))}}
		{!! Form::close() !!}

	</div>
</div>

@endsection


