<h1>Products</h1>

@foreach($products as $product)
    <li>{{ $product->name }}</li>
    <p>{{ $product->description }}</p>
@endforeach