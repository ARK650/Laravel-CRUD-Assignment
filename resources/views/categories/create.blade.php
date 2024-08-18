@extends('layouts.app')

@section('content')
<h1>Add Category</h1>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div>
        <label>Name:</label>
        <input type="text" name="name" required>
    </div>
    <button type="submit">Add Category</button>
</form>
@endsection