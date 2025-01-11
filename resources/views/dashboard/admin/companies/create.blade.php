@extends('layouts.app')

@section('content')
    <h1>Create Company</h1>
    <form action="{{ route('companies.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Create</button>
    </form>
@endsection
