@extends("layouts.app")

@section('title', 'User')

@section("container")

<h1>Les différents Utilisateurs</h1>

<ol>
    @foreach ($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach
</ol>

<p class="addUser">
 Pour ajouter des utilisateurs, cliquer <a href="/users/add" class="userLink">ici</a>
</p>

@endsection
