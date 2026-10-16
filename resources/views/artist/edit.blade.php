@extends('layouts.main')

@section('title', 'Modifier un artiste')

@section('content')

	<h2>Modifier un artiste</h2>
	
	<form action="{{ route('artist.update', $artist->id) }}" method="post">
	@csrf
	@method('PUT')
	
	<div> 

		<label for="firstname">Prénom</label>
		<input type="text" id="firstname" name="firstname"
			value="{{ old('firstname', $artist->firstname) }}">
		@error('firstname')
			<div class="alert alert-danger" style="color:red">{{ $message }}</div>
		@enderror
	</div>

	<div> 

		<label for="lastname">Nom</label>
		<input type="text" id="lastname" name="lastname"
			value="{{ old('lastname', $artist->lastname) }}">

		@error('lastname')
			<div class="alert alert-danger" style="color:red">{{ $message }}</div>
		@enderror

	</div>

	<button>Modifier</button>
	<a href="{{ route('artist.show', $artist->id) }}">Annuler</a>
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