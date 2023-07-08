<?php
session_start();

// Destruir todas as variáveis de sessão
session_unset();

// Destruir a sessão atual
session_destroy();
// Remove "/assets/php" da URL
$url = "http://localhost/Limbo5.0/assets/php/index.html";
$modifiedUrl = str_replace("/assets/php", "", $url);

header("Location: $modifiedUrl");
exit();
?>
