<h1>Categories Admin</h1>

<ul>
    @foreach($categories as $category)
        <li>{{ $category->name }}</li>
        <p>{{ $category->description }}</p>
    @endforeach
</ul>