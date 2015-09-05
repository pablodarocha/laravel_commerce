<h1>Products</h1>

<ul>
    @foreach($products as $product)
        <li>{{ $product->name }}</li>
        <p>{{ $product->description }}</p>
        <p>{{ $product->price }}</p>
    @endforeach
</ul>