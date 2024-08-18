@extends('layouts.app')

@section('content')
<h1>Admin Dashboard</h1>
<ul>
    <li><a href="{{ route('products.index') }}">Manage Products</a></li>
    <li><a href="{{ route('categories.index') }}">Manage Categories</a></li>
</ul>
@endsection