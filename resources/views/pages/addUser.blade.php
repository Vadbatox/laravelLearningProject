@extends("layouts.app")

@section('title', 'AJout Utilisateur')


@section("container")

<h1>Ajouter des Utilisateurs</h1>

<form action="/users/add" method="post">
    @csrf
    <div>
        <label for="name">Name :</label>
        <input type="text" name="name" placeholder="Entre Votre Nom">
    </div>

    <div>
        <label for="email">Email :</label>
        <input type="text" name="email" placeholder="Entre Votre Adresse Email">
    </div>

    <div>
        <label for="pwd">Password :</label>
        <input type="password" name="pwd" placeholder="Entre Votre Mot de passe">
    </div>

    <button>Ajouter</button>
</form>

@endsection
