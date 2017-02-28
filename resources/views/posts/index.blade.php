@extends('main')

@section('title', '| Tous les Articles')


@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>Tous les Articles</h1>
		</div>

		<div class="col-md-2">
			<a href="{{route('posts.create')}}" class="btn btn-lg btn-block btn-primary btn-h1-space">Ajouter un Article</a>
		</div>
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Titre</th>
					<th>Contenu</th>
					<th>Crée le : </th>

				</thead>
				<tbody>
					@foreach ($posts as $post)

					<tr>
						<th>{{ $post->id }}</th>
						<td>{{ $post->title }}</td>
						<td>{{ substr($post->body, 0, 50 ) }}</td>
						<td>{{ date('j M,Y', strtotime($post->created_at)) }}</td>
						<td><a href="{{ route('posts.show' , $post->id) }}" class="btn btn-default btn-sm">Voir</a> <a href="{{ route('posts.edit' , $post->id) }}" class="btn btn-default btn-sm">Modifier</a></td>
					</tr>
					@endforeach
				</tbody>

			</table>
			<div class="text-center">
				{!! $posts->links() !!}
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


@endsection