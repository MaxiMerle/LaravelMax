@extends('main')

@section('title', '| Inscription')


@section('content')


  <h2>Inscription</h2>
  @if(count($errors))
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  {!! Form::open(array('route' => 'users.store')) !!}
    <div class="form-group">
        {!! Form::label('name', 'Pseudo') !!}
        {!! Form::text('name', null, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email', null, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
      {!! Form::label('Mot de passe') !!}
      {!! Form::password('password', array('class' => 'form-control')) !!}
    </div>
    {!! Form::token() !!}
    {!! Form::submit(null, array('class' => 'btn btn-default')) !!}
  {!! Form::close() !!}
@endsection
