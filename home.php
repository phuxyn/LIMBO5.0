
<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION["username"])) {
  // Redireciona o usuário para a página de login
  header("Location: index.html");
  exit();
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Tecnine</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- LOGO -->   
	<link href="assets/img/lg3.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="assets/css/owl.carousel.css"/>
	<link rel="stylesheet" href="assets/css/animate.css"/>
	<link rel="stylesheet" href="teste.css"/>
	<link rel="stylesheet" href="assets/css/style.css"/>



	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a class="site-logo" href="index.html">
				<img src="assets/img/lg3.png" alt="">
			</a>
			<div class="user-panel">
				<img src="assets/img/perfil.png" alt="Perfil">
				<div class="options">
				  <a href="usuario.php">Perfil</a>
				  <a href="assets/php/sair.php">Sair</a>
				</div>
			  </div>
			  
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<nav class="main-menu">
				<ul>
				<li><a href="home.php">Home</a></li>
					<li><a href="review.php">Games</a></li>
					<li><a href="categories.php">News</a></li>
					<li><a href="community.php">Forums</a></li>
					<li><a href="contact.php">Contato</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->
	<!-- Butao para a leitura de deficientes visuais-->
	
	<!-- Seção de herói -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="assets/img/logo3.jpg">
				<div class="hs-text">
					<div class="container">
						<h2>Os melhores <span>Games</span> Do Momento</h2>
						<p>Aqui Voce encontrara as maiores novidades do mundo nerd em promeira mão</p>
						<a href="#" class="site-btn">Read More</a>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="assets/img/logo6.webp">
				<div class="hs-text">
					<div class="container">
						
						<h2>Os melhores <span>Games</span> Do Momento</h2>
						<p>Aqui Voce encontrara as maiores novidades do mundo nerd em promeira mão</p>
						<a href="#" class="site-btn">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Seção de herói fim -->


	<!--Seção de últimas notícias -->
	<div class="latest-news-section">
		<div class="ln-title">Últimas notícias</div>
		<div class="news-ticker">
			<div class="news-ticker-contant">
				<div class="nt-item"><span class="new">news</span>Tudo sobre o assunto e como ele afeta o setor do entretenimento. </div>
				<div class="nt-item"><span class="strategy">news</span>Teoria polêmica de Ganondorf divide comunidade de Zelda: Tears of the Kingdom </div>
				<div class="nt-item"><span class="racing">news</span>10 anos de BioShock Infinite: Reviravoltas, dimensões paralelas e um dos melhores finais da história dos games </div>
			</div>
		</div>
	</div>
	<!-- Seção de últimas notícias fim -->


	<!-- Seção de recursos -->
	<section class="feature-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="assets/img/over.jpg">
						<span class="cata new">new</span>
						<div class="fi-content text-white">
							<h5><a href="noticia1.php">Suspendisse ut justo tem por, rutrum</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
							<a href="#" class="fi-comment">3 Comments</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="assets/img/features/2.jpg">
						<span class="cata strategy">strategy</span>
						<div class="fi-content text-white">
							<h5><a href="#">Justo tempor, rutrum erat id, molestie</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
							<a href="#" class="fi-comment">3 Comments</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="assets/img/features/3.jpg">
						<span class="cata new">new</span>
						<div class="fi-content text-white">
							<h5><a href="#">Nullam lacinia ex eleifend orci porttitor</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
							<a href="#" class="fi-comment">3 Comments</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="assets/img/features/4.jpg">
						<span class="cata racing">racing</span>
						<div class="fi-content text-white">
							<h5><a href="#">Lacinia ex eleifend orci suscipit</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
							<a href="#" class="fi-comment">3 Comments</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Seção de recursos fim -->


	<!-- Seção de jogos recentes -->
	<section class="recent-game-section spad set-bg" data-setbg="assets/img/recent-game-bg.png">
		<div class="container">
			<div class="section-title">
				<div class="cata new">new</div>
				<h2>Avaliações recentes</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="assets/img/recent-game/1.jpg">
							<div class="cata new">new</div>
						</div>
						<div class="rgi-content">
							<h5>Suspendisse ut justo tem por, rutrum</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
							<a href="#" class="comment">3 Comments</a>
							<div class="rgi-extra">
								<div class="rgi-star"><img src="assets/img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="assets/img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="assets/img/recent-game/2.jpg">
							<div class="cata racing">racing</div>
						</div>
						<div class="rgi-content">
							<h5>Susce pulvinar metus nulla, vel  facilisis sem </h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
							<a href="#" class="comment">3 Comments</a>
							<div class="rgi-extra">
								<div class="rgi-star"><img src="assets/img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="assets/img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="assets/img/recent-game/3.jpg">
							<div class="cata adventure">Adventure</div>
						</div>
						<div class="rgi-content">
							<h5>Suspendisse ut justo tem por, rutrum</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
							<a href="#" class="comment">3 Comments</a>
							<div class="rgi-extra">
								<div class="rgi-star"><img src="assets/img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="assets/img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- Seção de jogos recentes fim -->


	<!-- CONTEINER MEIO FINAL -->
	<section class="tournaments-section spad">
		<div class="container">
			<div class="tournament-title">Tournaments</div>
			<div class="row">
				<div class="col-md-6">
					<div class="tournament-item mb-4 mb-lg-0">
						<div class="ti-notic">Premium Tournament</div>
						<div class="ti-content">
							<div class="ti-thumb set-bg" data-setbg="assets/img/tournament/1.jpg"></div>
							<div class="ti-text">
								<h4>World Of WarCraft</h4>
								<ul>
									<li><span>Tournament Beggins:</span> June 20, 2018</li>
									<li><span>Tounament Ends:</span> July 01, 2018</li>
									<li><span>Participants:</span> 10 teams</li>
									<li><span>Tournament Author:</span> Admin</li>
								</ul>
								<p><span>Prizes:</span> 1st place $2000, 2nd place: $1000, 3rd place: $500</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="tournament-item">
						<div class="ti-notic">Premium Tournament</div>
						<div class="ti-content">
							<div class="ti-thumb set-bg" data-setbg="assets/img/tournament/2.jpg"></div>
							<div class="ti-text">
								<h4>DOOM</h4>
								<ul>
									<li><span>Tournament Beggins:</span> June 20, 2018</li>
									<li><span>Tounament Ends:</span> July 01, 2018</li>
									<li><span>Participants:</span> 10 teams</li>
									<li><span>Tournament Author:</span> Admin</li>
								</ul>
								<p><span>Prizes:</span> 1st place $2000, 2nd place: $1000, 3rd place: $500</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Seção de torneios bg-->


	<!-- Seção de revisão -->
	<section class="review-section spad set-bg" data-setbg="img/review-bg.png">
		<div class="container">
			<div class="section-title">
				<div class="cata new">new</div>
				<h2>Avaliações recentes</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="assets/img/review/1.jpg">
							<div class="score yellow">9.3</div>
						</div>
						<div class="review-text">
							<h5>Assasin’’s Creed</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="assets/img/review/2.jpg">
							<div class="score purple">9.5</div>
						</div>
						<div class="review-text">
							<h5>Doom</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="assets/img/review/3.jpg">
							<div class="score green">9.1</div>
						</div>
						<div class="review-text">
							<h5>Overwatch</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="assets/img/review/4.jpg">
							<div class="score pink">9.7</div>
						</div>
						<div class="review-text">
							<h5>GTA</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Seção de revisão fim -->


	<!-- Seção superior do rodapé -->
	<section class="footer-top-section">
		<div class="container">
			<div class="footer-top-bg">
				<img src="assets/img/footer-top-bg.png" alt="">
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-logo text-white">
						<img src="assets/img/lg3.png" alt="">
						<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget mb-5 mb-md-0">
						<h4 class="fw-title">Latest Posts</h4>
						<div class="latest-blog">
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="assets/img/latest-blog/1.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="assets/img/latest-blog/2.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="assets/img/latest-blog/3.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			
	</section>
	<!-- Seção superior do rodapé fim -->

	
	<!--Seção de rodapé-->
	<footer class="footer-section">
		<div class="container">
			<ul class="footer-menu">
			<li><a href="home.php">Home</a></li>
					<li><a href="review.php">Games</a></li>
					<li><a href="categories.php">News</a></li>
					<li><a href="community.php">Forums</a></li>
					<li><a href="contact.php">Contato</a></li>
			</ul>
		</div>
	</footer>
	<!--Seção de rodapé fim-->


	<!--====== Javascripts & Jquery ======-->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.marquee.min.js"></script>
	<script src="assets/js/main.js"></script>
    </body>
</html>