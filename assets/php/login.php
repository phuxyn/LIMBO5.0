<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Conexão com o banco de dados
  $conn = new mysqli("localhost", "root", "", "marcos");
  if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
  }

  // Obtém as informações do usuário
  $sql = "SELECT * FROM users WHERE username='$username'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    // Verifica a senha
    if (password_verify($password, $row["password"])) {
      $_SESSION["username"] = $username;

      // Redireciona o usuário para a página desejada
      header("Location: http://localhost/Limbo5.0/home.php");
      exit();
    } else {
      echo "Senha incorreta.";
    }
  } else {
    echo "Usuário não encontrado.";
  }

  $conn->close();
}
?>
