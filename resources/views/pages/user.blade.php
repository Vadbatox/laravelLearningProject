@extends("layouts.app")

@section('title', 'User')

@section("container")

<h1>Les différents Utilisateurs</h1>

<ol>
    @foreach ($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach
</ol>

@endsection
