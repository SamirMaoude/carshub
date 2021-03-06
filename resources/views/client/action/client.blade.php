@extends('layouts.client')

@section('content')
<div class="container admin">
	<button class="btn btn-default btn-lg" type="button">
		<h5 class="total-price text-right"><i class="fa fa-shopping-basket fa-fw fa-2x"></i> Prix Total : <span>{{ $total }} Fcfa</span></h5>
	</button>
	<a href="ListDemande"><button class="btn btn-info btn-lg" type="button">
		Nombre de Demande <span class="badge">{{ $demande }}</span>
	</button></a>
	<a href="ListVoiture"><button class="btn btn-success btn-lg" type="button">
		Nombre de Voiture <span class="badge">{{ $voiture }}</span>
	</button></a>

</div>
@endsection
