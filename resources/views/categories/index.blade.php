@extends('layouts.app')

@section('content')
<h1>Categories</h1>
<a href="{{ route('categories.create') }}">Add Category</a>
<ul>
    @foreach($categories as $category)
        <li>{{ $category->name }}</li>
    @endforeach
</ul>
@endsection