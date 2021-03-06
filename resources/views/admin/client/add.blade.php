@extends('layouts.admin')

@section('content')
{!! Form::open(array('class'=>'form-horizontal','route'=>'GestionClient.store','files'=>true)) !!}
	{{ csrf_field() }}

	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		<label for="name" class="col-md-4 control-label">Nom</label>

		<div class="col-md-6">
			<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

			@if ($errors->has('name'))
			<span class="help-block"> <strong>{{ $errors->first('name') }}</strong> </span>
			@endif
		</div>
	</div>

	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		<label for="email" class="col-md-4 control-label">Adresse mail</label>

		<div class="col-md-6">
			<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

			@if ($errors->has('email'))
			<span class="help-block"> <strong>{{ $errors->first('email') }}</strong> </span>
			@endif
		</div>
	</div>

	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		<label for="password" class="col-md-4 control-label">Password</label>

		<div class="col-md-6">
			<input id="password" type="password" class="form-control" name="password">

			@if ($errors->has('password'))
			<span class="help-block"> <strong>{{ $errors->first('password') }}</strong> </span>
			@endif
		</div>
	</div>

	<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
		<label for="password-confirm" class="col-md-4 control-label">Confirmer Mot de passe</label>

		<div class="col-md-6">
			<input id="password-confirm" type="password" class="form-control" name="password_confirmation">

			@if ($errors->has('password_confirmation'))
			<span class="help-block"> <strong>{{ $errors->first('password_confirmation') }}</strong> </span>
			@endif
		</div>
	</div>

	<div class="form-group">
		<div class="col-md-6 col-md-offset-4">
			<button type="submit" class="btn btn-primary">
				<i class="fa fa-btn fa-user"></i> Inscrire
			</button>
		</div>
	</div>
{!! Form::close() !!}
@endsection
