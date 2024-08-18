@extends('layouts.app')

@section('content')
<h1>Products</h1>
<a href="{{ route('products.create') }}">Add Product</a>
<ul>
    @foreach($products as $product)
        <li>{{ $product->name }} - {{ $product->category->name }}</li>
    @endforeach
</ul>
@endsection