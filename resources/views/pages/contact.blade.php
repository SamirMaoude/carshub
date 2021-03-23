@extends('layouts.app')

@section('content')
<header id="head" class="secondary">
	<div class="container">
		<h1><i class="fa fa-comment fa-fw"></i> Contactez Nous</h1>
	</div>
</header>
<div class="container animated fadeIn contact">
	@include('pages.message') 
	<div class="row">
		<div class="col-sm-12" id="parent">
			<div class="col-sm-6">
				<form class="contact-form"  method="post" action="Contact" >
					{{ csrf_field() }}
					<div class="form-group">
						<input type="text" class="form-control"  name="name" placeholder="Name" required="required" >
					</div>

					<div class="form-group form_left">
						<input type="email" class="form-control"  name="email" placeholder="Email" required="required">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" name="subject"   placeholder="Sujet" required="required">
					</div>
					<div class="form-group">
						<textarea class="form-control textarea-contact" rows="5"  name="message" placeholder="Votre Message ..." required=""></textarea>
						<br>
						<button class="btn btn-default btn-send">
							<span class="fa fa-send"></span> Contactez Nous
						</button>
					</div>
				</form>
			</div>
			

		</div>
	</div>
	<div class="container second-portion">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-lg-4">
				<div class="box">
					<div class="icon">
						<div class="image">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="info">
							<h3 class="title">MAIL & SITE WEB</h3>
							<p>
								<i class="fa fa-envelope" aria-hidden="true"></i> &nbsp carshub@gmail.com
								<br>
								<br>
								<i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.carshub.com
							</p>

						</div>
					</div>
					<div class="space"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-4">
				<div class="box">
					<div class="icon">
						<div class="image">
							<i class="fa fa-mobile" aria-hidden="true"></i>
						</div>
						<div class="info">
							<h3 class="title">CONTACTS</h3>
							<p>
								<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+229)-9724XXXX
								<br>
								<br>
								<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp  (+229)-23610652
							</p>
						</div>
					</div>
					<div class="space"></div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-lg-4">
				<div class="box">
					<div class="icon">
						<div class="image">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="info">
							<h3 class="title">ADRESSE</h3>
							<p>
								<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp 15/3 Abomey-calavi
								- 360001.
							</p>
						</div>
					</div>
					<div class="space"></div>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
