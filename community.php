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
	<title>Tecnine</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- LOGO -->   
	<link href="img/lg3.png" rel="shortcut icon"/>

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
			<div class="user-panel">
				<img src="assets/img/perfil.png" alt="Perfil">
				<div class="options">
				  <a href="usuario.php">Perfil</a>
				  <a href="assets/php/sair.php">Sair</a>
				</div>
			  </div>
			<div class="user-panel">
				<a href="#">Login</a>  /  <a href="#">Register</a>
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
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2>Our Community</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section community-page set-bg" data-setbg="img/community-bg.jpg">
		<div class="community-warp spad">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="community-top-title">All Members (344)</h3>
					</div>
					<div class="col-md-6 text-lg-right">
						<form class="community-filter">
							<label for="fdf5">Show</label>
							<select id="fdf5">
								<option value="#">Everything</option>
								<option value="#">Everything</option>
							</select>
						</form>
					</div>
				</div>
				<ul class="community-post-list">
					<li>
						<div class="community-post">
							<div class="author-avator set-bg" data-setbg="img/authors/1.jpg"></div>
							<div class="post-content">
								<h5>James Smith<span>posted an update</span></h5>
								<div class="post-date">June 21, 2018</div>
								<p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
							</div>
						</div>
					</li>
					<li>
						<div class="community-post">
							<div class="author-avator set-bg" data-setbg="img/authors/8.jpg"></div>
							<div class="post-content">
								<h5>Partik Williams<span>posted an update</span></h5>
								<div class="post-date">June 21, 2018</div>
								<p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
								<div class="attachment-file">
									<img src="img/attachment.jpg" alt="">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="community-post">
							<div class="author-avator set-bg" data-setbg="img/authors/5.jpg"></div>
							<div class="post-content">
								<h5>Cris The Man<span>posted an update</span></h5>
								<div class="post-date">June 21, 2018</div>
								<p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
							</div>
						</div>
					</li>
					<li>
						<div class="community-post">
							<div class="author-avator set-bg" data-setbg="img/authors/1.jpg"></div>
							<div class="post-content">
								<h5>James Smith<span>posted an update</span></h5>
								<div class="post-date">June 21, 2018</div>
								<p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
							</div>
						</div>
					</li>
					<li>
						<div class="community-post">
							<div class="author-avator set-bg" data-setbg="img/authors/4.jpg"></div>
							<div class="post-content">
								<h5>Cris The Man<span>posted an update</span></h5>
								<div class="post-date">June 21, 2018</div>
								<p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
							</div>
						</div>
					</li>
					<li>
						<div class="community-post">
							<div class="author-avator set-bg" data-setbg="img/authors/6.jpg"></div>
							<div class="post-content">
								<h5>James Smith<span>posted an update</span></h5>
								<div class="post-date">June 21, 2018</div>
								<p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
							</div>
						</div>
					</li>
					<li>
						<div class="community-post">
							<div class="author-avator set-bg" data-setbg="img/authors/7.jpg"></div>
							<div class="post-content">
								<h5>Maria Doe<span>posted an update</span></h5>
								<div class="post-date">June 21, 2018</div>
								<p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
							</div>
						</div>
					</li>
				</ul>
				<div class="site-pagination sp-style-2">
					<span class="active">01.</span>
					<a href="#">02.</a>
					<a href="#">03.</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->


	<!-- Footer top section -->
	<section class="footer-top-section">
		<div class="container">
			<div class="footer-top-bg">
				<img src="img/footer-top-bg.png" alt="">
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-logo text-white">
						<img src="img/lg3.png" alt="">
						<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget mb-5 mb-md-0">
						<h4 class="fw-title">Latest Posts</h4>
						<div class="latest-blog">
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/1.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/2.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/3.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget">
						<h4 class="fw-title">Top Comments</h4>
						<div class="top-comment">
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/1.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/2.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/3.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/4.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer top section end -->

	
	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<ul class="footer-menu">
			<li><a href="home.php">Home</a></li>
					<li><a href="review.php">Games</a></li>
					<li><a href="categories.php">News</a></li>
					<li><a href="community.php">Forums</a></li>
					<li><a href="contact.php">Contato</a></li>
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