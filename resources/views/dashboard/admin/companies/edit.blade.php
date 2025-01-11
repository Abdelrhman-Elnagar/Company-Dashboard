@extends('layouts.app')

@section('content')
    <h1>Edit Company</h1>
    <form action="{{ route('companies.update', $company->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $company->name }}" required>
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $company->email }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
