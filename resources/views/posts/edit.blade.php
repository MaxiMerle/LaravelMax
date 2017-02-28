@extends('main')

@section('title', '| Modifier un Article')


@section('content')



<div class="row">
{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
	<div class="col-md-8">
		{{ Form::label('title', 'Titre:') }}
		{{ Form::text('title', null, ["class" => 'form-control input-lg']) }}
		
		{{ Form::label('body', 'Contenu:', ['class'=>'form-spacing-top']) }}
		{{ Form::textarea('body', null,  ['class' => 'form-control']) }}
	</div>
	<div class="col-md-4">
		 <div class="well">
		 	<dl class="dl-horizontal">
		 		<dt>Crée le :</dt>
		 		<dd>{{ date('j M, Y h:ia', strtotime($post->created_at)) }}</dd>
		 	</dl><hr>
		 	<dl class="dl-horizontal">
		 		<dt>Modifié le :</dt>
		 		<dd>{{ date('j M, Y h:ia', strtotime($post->updated_at)) }}</dd>
		 	</dl>
		 	<hr>
			<div class="row">
			 	<div class="col-md-6">
			 		{!!  Html::linkRoute('posts.show', 'Annuler' , array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
			 		
			 		

			 	</div>
		 	<div class="col-md-6">
		 	{{ Form::submit('Sauvegarder', ['class' => 'btn btn-success btn-block'])}}
		 				 		
		 		
		 	</div>
			</div>
		 </div>
	</div>
	{!! Form::close() !!}
</div> 

@endsection