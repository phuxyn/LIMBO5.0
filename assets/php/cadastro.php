<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Validações (Você pode adicionar mais validações conforme necessário)

  // Verifica se os campos estão vazios
  if (empty($username) || empty($email) || empty($password)) {
    echo "Por favor, preencha todos os campos.";
    exit;
  }

  // Hash da senha
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // Conexão com o banco de dados
  $conn = new mysqli("localhost", "root", "", "marcos");
  if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
  }
  
  // Verifica se o usuário já existe
  $checkUserQuery = "SELECT * FROM users WHERE username='$username' OR email='$email'";
  $checkUserResult = $conn->query($checkUserQuery);

  if ($checkUserResult->num_rows > 0) {
    echo "Nome de usuário ou e-mail já estão cadastrados.";
    exit;
  }

  // Hash da senha
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // Insere o usuário no banco de dados
  $insertUserQuery = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
  if ($conn->query($insertUserQuery) === TRUE) {
    echo "Cadastro realizado com sucesso!";
    header("Location: http://localhost/Limbo5.0/log.php"); // Redireciona para o index.php
    exit();
  } else {
    echo "Erro ao cadastrar o usuário: " . $conn->error;
  }

  $conn->close();
}
?>