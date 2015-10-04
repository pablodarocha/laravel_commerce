@extends('templates.app')

@section('title', 'Criar Categoria')

@section('content')
  <div class="container">
    <h1>Create Category</h1>

    @if($errors->any())
      <ul class="alert">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif

    {!! Form::open(['route' => 'categories.store']) !!}
      <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::submit('Add Category', ['class' => 'btn btn-primary form-control']) !!}
        <br><br>
        <a href="{{ route('categories') }}" class="btn btn-default form-control">Back to Categories</a>
      </div>
    {!! Form::close() !!}
  </div>




@endsection