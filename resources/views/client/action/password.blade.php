@extends('layouts.client')

@section('content')
<form class="form-horizontal" role="form" method="POST" action="PasswordClient">
	{{ csrf_field() }}
	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		<label for="password" class="col-md-4 control-label">Mot de passe</label>
		<div class="col-md-6">
			<input id="password" type="password" class="form-control" name="password">
			@if ($errors->has('password'))
			<span class="help-block"> <strong>{{ $errors->first('password') }}</strong> </span>
			@endif
		</div>
	</div>
	<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
		<label for="password-confirm" class="col-md-4 control-label">Confirmer mot de passe</label>
		<div class="col-md-6">
			<input id="password-confirm" type="password" class="form-control" name="password_confirmation">

			@if ($errors->has('password_confirmation'))
			<span class="help-block"> <strong>{{ $errors->first('password_confirmation') }}</strong> </span>
			@endif
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-6 col-md-offset-4">
			<button type="submit" class="btn btn-success">
				<i class="fa fa-btn fa-edit"></i> Modifier
			</button>
		</div>
	</div>
</form>
@endsection
