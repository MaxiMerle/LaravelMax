@extends('main')

@section('title', '| Article')

@section('content')

<div class="row">
	<div class="col-md-8">
		<h1>{{ $post->title}}</h1>

		<p class="lead">{{ $post->body }}</p>
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
			 		{!!  Html::linkRoute('posts.edit', 'Modifier' , array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
			 		
			 		

			 	</div>
		 	<div class="col-md-6">
		 	{!! Form::open(['route' => ['posts.destroy' , $post -> id], 'method' => 'DELETE']) !!}

		 	{!!  Form::submit('Supprimer' , ['class' => 'btn btn-danger btn-block']) !!}

		 	{!! Form::close() !!}
		 		
		 	</div>
		 				<div class="col-md-12">
				{{ Html::linkRoute('posts.index', '<< Tous les articles', [], ['class' => 'btn btn-default btn-block btn-h1-space'])}}
			</div>
			</div>

		 </div>
		 	

<div id="backend-comments" style="margin-top: 50px;">
				<h3>Tous les commentaires <small>{{ $post->comments()->count() }} au total</small></h3>

				<table class="table">
					<thead>
						<tr>
							<th>Nom</th>
							<th>Email</th>
							<th>Commentaire</th>
							<th width="70px"></th>
						</tr>
					</thead>

					<tbody>
						@foreach ($post->comments as $comment)
						<tr>
							<td>{{ $comment->name }}</td>
							<td>{{ $comment->email }}</td>
							<td>{{ $comment->comment }}</td>
							<td>
								<a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
								<a href="{{ route('comments.delete', $comment->id) }}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		 	
		 	
	</div>
</div>



@endsection