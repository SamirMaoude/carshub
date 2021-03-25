@extends('layouts.admin')

@section('content')
<div class="container admin">
	<a href="GestionClient"><button class="btn btn-primary btn-lg" type="button">
		Nombre de clients  <span class="badge">{{ $client }}</span>
	</button></a>
	<a href="GestionVoiture"><button class="btn btn-success btn-lg" type="button">
		Nombre de Voiture  <span class="badge">{{ $voiture }}</span>
	</button></a>
	<a href="GestionContact"><button class="btn btn-warning btn-lg" type="button">
		Nombre de contact  <span class="badge">{{ $contact }}</span>
	</button></a>
</div>
@endsection
