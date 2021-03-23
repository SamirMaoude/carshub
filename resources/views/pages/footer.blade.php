<footer id="footer" class="clearfix">
	<div id="footer-widgets">
		<div class="container">
			<div id="footer-wrapper">
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div id="meta-3" class="widget widgetFooter widget_meta">
							<h4 class="widgettitle">Pages importantes :</h4>
							<ul>
								<li>
									<a href="{{ url('/') }}"><i class="fa fa-home fa-fw"></i> Accueil</a>
								</li>
								<li>
									<a href="login"><i class="fa fa-link"></i>   Voitures</a>
								</li>
								<li>
									<a href="Contact"><i class="fa fa-envelope fa-fw"></i> Contactez Nous</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div id="recent-posts-3" class="widget widgetFooter widget_recent_entries">
							<h4 class="widgettitle">Nos réseaux sociaux :</h4>
							<ul>
								<li>
									<a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i> Facebook</a>
								</li>
								<li>
									<a target="_blank" href="https://www.twitter.com/"><i class="fa fa-twitter"></i> Twitter</a>
								</li>
								<li>
									<a target="_blank" href="http://www.youtube.com/"><i class="fa fa-youtube"></i> Youtube</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div id="search-3" class="widget widgetFooter widget_search">
							<h4 class="widgettitle">Rechercher Location :</h4>

							<div class="form-group">
								<label class="control-label">Écrivez ce que vous voulez rechercher  :</label>
								<div class="input-group">
									<span class="input-group-addon"> <i class="fa fa-search"></i></span>
									<input class="form-control" placeholder="recherche ..." type="text">
									<span class="input-group-btn">
										<button class="btn btn-primary" type="button">
											Recherche !
										</button> </span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-floor">
		<div class="container">
			<div class="row">
				<div class="col-md-4 copyright">
					 © 2021
				</div>
				<div class="col-md-4 col-md-offset-4 attribution">
					Développé par <a target="_blank" href="#">da CRUZ Moïse & MAOUDE Samir</a> .
				</div>
			</div>
		</div>
	</div>
</footer>
@include('pages.js')
