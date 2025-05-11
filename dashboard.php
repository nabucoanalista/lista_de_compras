<?php
// filepath: c:\xampp\htdocs\listadecompras\dashboard.php

session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php'); // Redireciona para o login se não estiver logado
    exit;
}

echo "<h1>Bem-vindo ao sistema!</h1>";
echo "<p>Você está logado como o usuário ID: {$_SESSION['usuario']}</p>";
echo '<a href="logout.php">Sair</a>';