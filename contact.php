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
<html lang="en">
<head>
	<title>Game Warrior Template</title>
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


	<!-- Latest news section -->
	<div class="latest-news-section">
		<div class="ln-title">Últimas notícias</div>
		<div class="news-ticker">
			<div class="news-ticker-contant">
				<div class="nt-item"><span class="new">new</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
				<div class="nt-item"><span class="strategy">strategy</span>Isum dolor sit amet, consectetur adipiscing elit. </div>
				<div class="nt-item"><span class="racing">racing</span>Isum dolor sit amet, consectetur adipiscing elit. </div>
			</div>
		</div>
	</div>
	<!-- Latest news section end -->


	<!-- Page info section -->
	<section class="page-info-section set-bg" data-setbg="assets/img/page-top-bg/5.jpg">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2>Nossos Contatos</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section spad contact-page">
		<div class="container">
			<div class="map" id="map-canvas"></div>
			<div class="row">
				<div class="col-lg-4 mb-5 mb-lg-0">
					<h4 class="comment-title">Contato us</h4>
					<p>Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feug iat bibendum orci, non elementum urna. Cras sit amet sapien aliquam.</p>
					<div class="row">
						<div class="col-md-9">
							<ul class="contact-info-list">
								<li><div class="cf-left">Endereço</div><div class="cf-right"> Casa 99 rua 99</div></li>
								<li><div class="cf-left">Telefone</div><div class="cf-right">+61 9999999999</div></li>
								<li><div class="cf-left">E-mail</div><div class="cf-right">yourmail@gmail.com</div></li>
							</ul>
						</div>
					</div>
					<div class="social-links">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						
					</div>
				</div>
				<div class="col-lg-8">
					<div class="contact-form-warp">
						<h4 class="comment-title">Deixa uma opnião</h4>
						<form class="comment-form">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Name">
								</div>
								<div class="col-md-6">
									<input type="email" placeholder="Email">
								</div>
								<div class="col-lg-12">
									<input type="text" placeholder="Subject">
									<textarea placeholder="Message"></textarea>
									<button class="site-btn btn-sm">Enviar</button>
								</div>
							</div>
						</form>
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


	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWTIlluowDL-X4HbYQt3aDw_oi2JP0Krc&sensor=false"></script>
	<script src="assets/js/map.js"></script>

    </body>
</html>