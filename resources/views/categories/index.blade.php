<h1>Categories</h1>

@foreach($categories as $category)
    <li>{{ $category->name }}</li>
    <p>{{ $category->description }}</p>
@endforeach
