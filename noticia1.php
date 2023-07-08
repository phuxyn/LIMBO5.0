<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION["username"])) {
  // Redireciona o usuário para a página de login
  header("Location:index.html");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Overwatch</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="img/lg3.png" rel="shortcut icon"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="assets/acss/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="assets/css/owl.carousel.css"/>
	<link rel="stylesheet" href="assets/css/style.css"/>
	<link rel="stylesheet" href="assets/css/animate.css"/>
	<link rel="stylesheet" href="assets/css/noticia.css"/>
	<style>
		.container2 {
			padding: 20px;
			max-width: 800px;
			margin: 0 auto;
		}
		.container2 p {
			font-size: 16px;
			line-height: 1.6;
		}
	</style>
</head>
<body onkeydown="speak(event)">
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<header class="header-section">
		<div class="container">
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
			</div>
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
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
	<div class="page-container">
		<div class="container2">
			<p>Pressione a tecla [F] para escutar, e a tecla [P] para parar.</p>
			<h1>Overwatch 2 não terá mais modo história</h1>
			<div>
				<p>Em 2019, quando Overwatch 2 foi revelado,
					a Blizzard anunciou que o grande diferencial do jogo
					seria um modo história robusto, com missões cooperativas de campanha,
					que prometiam um grande fator replay, e os jogadores ainda poderiam evoluir seus heróis,
					com um novo sistema de progressão de níveis, e até mesmo uma árvore de habilidades.
					No entanto, a empresa anunciou hoje que o modo foi cancelado.
				</p>
			</div>
			<div class="lifewiter">
				<img src="assets/img/over.jpg" alt="Homem rosa">
			</div>
			<p>Em uma livestream da Blizzard, falou sobre o futuro de Overwatch 2
				revelou que decidiu cancelar os planos originais do modo história
				cooperativo, que seria uma experiência robusta separada com todo um sistema de árvore de talentos e progressão de longo prazo.
				Os desenvolvedores explicam que tentaram,
				mas não conseguiram entregar algo que fosse do nível da Blizzard, e que então decidiram
				retirar o modo de seus planos. Eles dizem que também estão decepcionados, mas acreditam que
				foi o melhor para o futuro do jogo.
			</p>
			<div class="ramatra">
				<img src="assets/img/max.jpg" alt="robo monge">
			</div>
			<div>
				<p>Nessa mesma live, a Blizzard anunciou que
					Overwatch 2 contará com novos modos de jogo, uma nova passe de temporada
					e missões de história, algo que simplesmente decepcionou os fãs do jogo.
				</p>
			</div>
		</div>
	</div>
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
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.marquee.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script>
		function speak(text) {
			if ('speechSynthesis' in window) {
				const utterance = new SpeechSynthesisUtterance(text);
				utterance.volume = 1;
				utterance.rate = 1;
				utterance.lang = 'pt-BR';
				speechSynthesis.speak(utterance);
			}
		}
		speak('Pressione a tecla F para ouvir e a tecla P para parar de ouvir!');
	</script>
	<script>
		function speak(event){
			if(event.keyCode == 70){
				var title = document.querySelector('h1').textContent;
				var text = document.querySelector('p').textContent;
				const utterance = new SpeechSynthesisUtterance();
				utterance.rate = 1;
				utterance.lang = 'pt-br';
				utterance.pitch = 75;
				utterance.pause = 1;
				utterance.text = title + '. ' + text;
				speechSynthesis.speak(utterance);
			} else {
				speechSynthesis.cancel();
			}
		}
	</script>
</body>
</html>
