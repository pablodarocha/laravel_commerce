@extends('templates.app')

@section('title', 'Products List')

@section('content')

  <div class="container">
    <h1>Products</h1>

    <a href="{{ route('products.create') }}" class="btn btn-primary">New Product</a>
    <br>
    <br>

    <table class="table">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Featured</th>
        <th>Recommend</th>
        <th>Action</th>
      </tr>

      @foreach($products as $product)
        <tr>
          <td>{{ $product->id }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->description }}</td>
          <td>{{ $product->price }}</td>
          <td>{{ $product->featured }}</td>
          <td>{{ $product->recommend }}</td>
          <td>
            <a href="#" class="btn btn-success">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>
          </td>
        </tr>
      @endforeach

    </table>

  </div>
@endsection