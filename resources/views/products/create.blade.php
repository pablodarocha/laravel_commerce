@extends('templates.app')

@section('title', 'New Product')

@section('content')
  <div class="container">
    <h1>Add Product</h1>

    @if($errors->any())
      <ul class="alert">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif

    {!! Form::open(['route' => 'products.store']) !!}
      <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('price', 'Price:') !!}
        {!! Form::text('price', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('Featured?') !!}
        {!! Form::radio('featured', 1, ['class' => 'form-control']) !!} Yes
        {!! Form::radio('featured', 0, ['class' => 'form-control']) !!} No
      </div>

      <div class="form-group">
        {!! Form::label('Recommend?') !!}
        {!! Form::radio('recommend', 1, ['class' => 'form-control']) !!} Yes
        {!! Form::radio('recommend', 0, ['class' => 'form-control']) !!} No
      </div>

      <div class="form-group">
        {!! Form::submit('Add Product', ['class' => 'btn btn-primary form-control']) !!}
        <br><br>
        <a href="{{ route('products') }}" class="btn btn-default form-control">Back to Products</a>
      </div>
      {!! Form::close() !!}
  </div>
@endsection