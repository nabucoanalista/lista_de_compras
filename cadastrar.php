<?php
// filepath: c:\xampp\htdocs\listadecompras\cadastrar.php

require_once 'vendor/autoload.php'; // Inclui o autoload do Composer

use App\Controller\UsuarioController;

// Instanciar o controlador
$usuarioController = new UsuarioController();

// Receber os dados do formulário
$dados = [
    'nome' => $_POST['nome'] ?? '', // Nome do usuário
    'email' => $_POST['email'] ?? '', // Email do usuário
    'senha' => $_POST['senha'] ?? '', // Senha do usuário
];

// Chamar o método para criar o usuário
$resultado = $usuarioController->criarUsuario($dados);

// Retornar o resultado como JSON
header('Content-Type: application/json');
echo json_encode($resultado);