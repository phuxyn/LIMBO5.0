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
	<link rel="stylesheet" href="assets/css/style.css"/>
	<link rel="stylesheet" href="assets/css/animate.css"/>


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



	<!-- Page info section -->
	<section class="page-info-section set-bg" data-setbg="assets/img/page-top-bg/1.jpg">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2>Video Gallery</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section recent-game-page spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="assets/img/recent-game/1.jpg">
									<div class="cata new">racing</div>
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
						<div class="col-md-6">
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
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="assets/img/recent-game/3.jpg">
									<div class="cata adventure">Adventure</div>
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
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="assets/img/recent-game/4.jpg">
									<div class="cata new">racing</div>
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
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="assets/img/recent-game/5.jpg">
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
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="assets/img/recent-game/6.jpg">
									<div class="cata adventure">Adventure</div>
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
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="assets/img/recent-game/7.jpg">
									<div class="cata new">racing</div>
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
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="assets/img/recent-game/8.jpg">
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
					</div>
					<div class="site-pagination">
						<span class="active">01.</span>
						<a href="#">02.</a>
						<a href="#">03.</a>
					</div>
				</div>
				<!-- sidebar -->
				<div class="col-lg-4 col-md-7 sidebar pt-5 pt-lg-0">
					<!-- widget -->
					<div class="widget-item">
						<form class="search-widget">
							<input type="text" placeholder="Search">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- widget -->
					<div class="widget-item">
						<h4 class="widget-title">Latest Posts</h4>
						<div class="latest-blog">
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="assets/img/latest-blog/1.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Ipsum dolor sit amet, consectetur adipisc ing consecips</p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="assets/img/latest-blog/2.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Ipsum dolor sit amet, consectetur adipisc ing consecips</p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="assets/img/latest-blog/3.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Ipsum dolor sit amet, consectetur adipisc ing consecips</p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
						</div>
					</div>
					<!-- widget -->
					<div class="widget-item">
						<h4 class="widget-title">Top Comments</h4>
						<div class="top-comment">
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="assets/img/authors/1.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span> Lorem consec ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="assets/img/authors/2.jpg"></div>
								<div class="tc-content">
									<p><a href="#">Michael James</a> <span>on</span>Cras sit amet sapien aliquam</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="assets/img/authors/3.jpg"></div>
								<div class="tc-content">
									<p><a href="#">Justin More</a> <span>on</span> Lorem ipsum dolor consecsit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
						</div>
					</div>
					<!-- widget -->
					<div class="widget-item">
						<div class="feature-item set-bg" data-setbg="assets/img/features/1.jpg">
							<span class="cata new">new</span>
							<div class="fi-content text-white">
								<h5><a href="#">Suspendisse ut justo tem por, rutrum</a></h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
								<a href="#" class="fi-comment">3 Comments</a>
							</div>
						</div>
					</div>
					<!-- widget -->
					<div class="widget-item">
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
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<ul class="footer-menu">
			<li><a href="index.html">Home</a></li>
				<li><a href="review.html">Games</a></li>
				<li><a href="categories.html">News</a></li>
				<li><a href="community.html">Forums</a></li>
				<li><a href="contact.html">Contato</a></li>
			</ul>
			<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright & All rights reserved | This template is made with by Limbo news
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.marquee.min.js"></script>
	<script src="assets/js/main.js"></script>
    </body>
</html>