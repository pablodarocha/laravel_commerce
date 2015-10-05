@extends('templates.app')

@section('title', 'Edit Product')

@section('content')
  <div class="container">
    <h1>Edit Product: {{ $product->name }}</h1>

    @if($errors->any())
      <ul class="alert">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif

    {!! Form::open(['route' => ['products.update', $product->id], 'method' => 'put']) !!}
      <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', $product->name, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::textarea('description', $product->description, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('price', 'Price:') !!}
        {!! Form::text('price', $product->price, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('Featured?') !!}
        <br>
        {!! Form::radio('featured', 1, ($product->featured)?true:false, ['class' => 'form-inline']) !!} Yes
        {!! Form::radio('featured', 0, (!$product->featured)?true:false, ['class' => 'form-inline']) !!} No
      </div>

      <div class="form-group">
        {!! Form::label('Recommend?') !!}
        <br>
        {!! Form::radio('recommend', 1, ($product->recommend)?true:false, ['class' => 'form-inline']) !!} Yes
        {!! Form::radio('recommend', 0, (!$product->recommend)?true:false, ['class' => 'form-inline ']) !!} No
      </div>

      <div class="form-group">
        {!! Form::submit('Edit Product', ['class' => 'btn btn-primary form-control']) !!}
        <br><br>
        <a href="{{ route('products') }}" class="btn btn-default form-control">Back to Products List</a>
      </div>
      {!! Form::close() !!}
  </div>
@endsection