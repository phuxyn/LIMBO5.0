<?php
session_start();

// Conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "marcos");
if ($conn->connect_error) {
  die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Obtém informações do usuário conectado
$username = $_SESSION["username"];
$selectUserQuery = "SELECT * FROM users WHERE username='$username'";
$selectUserResult = $conn->query($selectUserQuery);

if ($selectUserResult->num_rows > 0) {
  $user = $selectUserResult->fetch_assoc();
} else {
  echo "Usuário não encontrado.";
  exit;
}

// Atualizar informações do usuário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $newBio = $_POST["bio"];
  $avatar = $_FILES["avatar"]["name"];
  $avatarTmpName = $_FILES["avatar"]["tmp_name"];

  // Move o arquivo de avatar para uma pasta
  move_uploaded_file($avatarTmpName, "assets/img/avatares/" . $avatar);

  // Atualiza as informações do usuário no banco de dados
  $updateUserQuery = "UPDATE users SET bio='$newBio', avatar='$avatar' WHERE username='$username'";
  if ($conn->query($updateUserQuery) === TRUE) {
    echo "Informações atualizadas com sucesso!";
    $user["bio"] = $newBio;
    $user["avatar"] = $avatar;
  } else {
    echo "Erro ao atualizar informações do usuário: " . $conn->error;
  }
}

$conn->close();
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

  <style>
    bosdy {
      font-family: Arial, sans-serif;
      background-color: #fafafa;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
    }

    .profile-box {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 4px;
      padding: 20px;
    }

    h1 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    h2 {
      font-size: 18px;
      margin-bottom: 5px;
    }

    p {
      margin-bottom: 5px;
    }

    .profile-header {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .profile-avatar img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-right: 20px;
    }

    .profile-username {
      margin-bottom: 10px;
    }

    .profile-bio {
      font-size: 14px;
    }

    .profile-form label {
      display: block;
      margin-bottom: 5px;
    }

    .profile-form textarea {
      width: 100%;
      height: 100px;
      padding: 5px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }

    .profile-form input[type="file"] {
      margin-bottom: 10px;
    }

    .profile-form input[type="submit"] {
      background-color: #3897f0;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .profile-form input[type="submit"]:hover {
      background-color: #357ae8;
    }
  </style>
  <title>Tela de Perfil Limbo</title>
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
  
  <div class="container">
    <div class="profile-box">
      <h1>Tela de Perfil</h1>
      <div class="profile-header">
        <div class="profile-avatar">
          <img src="assets/img/avatares/<?php echo $user["avatar"]; ?>" alt="Avatar">
        </div>
        <div>
          <h2 class="profile-username"><?php echo $user["username"]; ?></h2>
          <p class="profile-bio"><?php echo $user["bio"]; ?></p>
        </div>
      </div>

      <h3>Editar Perfil:</h3>
      <form class="profile-form" method="POST" enctype="multipart/form-data">
        <label for="bio">Bio:</label>
        <textarea name="bio" id="bio"><?php echo $user["bio"]; ?></textarea>
        <br>

        <label for="avatar">Avatar:</label>
        <input type="file" name="avatar" id="avatar">
        <br>

        <input type="submit" value="Atualizar Perfil">
      </form>
    </div>
  </div>
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
