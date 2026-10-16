@extends('layouts.app')

@section('title', 'Ajouter un artiste')

@section('content')
    <h2>Ajouter un artiste</h2>

    <form action="{{ route('artist.store') }}" method="post">
        @csrf

        <div>
            <label for="firstname">Prénom</label>
            <input type="text" id="firstname" name="firstname"
                   value="{{ old('firstname') }}">
            @error('firstname')
                <div style="color:red">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="lastname">Nom</label>
            <input type="text" id="lastname" name="lastname"
                   value="{{ old('lastname') }}">
            @error('lastname')
                <div style="color:red">{{ $message }}</div>
            @enderror
        </div>

        <button>Ajouter</button>
        <a href="{{ route('artist.index') }}">Annuler</a>
    </form>

    @if ($errors->any())
    <div style="color:red">
        <h2>Liste des erreurs de validation</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <nav><a href="{{ route('artist.index') }}">Retour à l'index</a></nav>
@endsection