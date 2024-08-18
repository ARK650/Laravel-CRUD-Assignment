@extends('layouts.app')

@section('content')
<h1>Add Product</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div>
        <label>Name:</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label>Price:</label>
        <input type="text" name="price" required>
    </div>
    <div>
        <label>Description:</label>
        <textarea name="description" required></textarea>
    </div>
    <div>
        <label>Category:</label>
        <select name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Add Product</button>
</form>
@endsection