<?php
// filepath: c:\xampp\htdocs\listadecompras\redefinir-senha.php

require_once 'vendor/autoload.php';

use App\Model\UsuarioModel;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['token'] ?? '';
    $novaSenha = $_POST['nova_senha'] ?? '';

    $usuarioModel = new UsuarioModel();

    // Verificar se o token é válido
    $usuario = $usuarioModel->getUsuarioByToken($token);

    if ($usuario) {
        // Atualizar a senha do usuário
        $novaSenhaHash = password_hash($novaSenha, PASSWORD_DEFAULT);
        if ($usuarioModel->atualizarSenha($usuario['id'], $novaSenhaHash)) {
            echo "Senha redefinida com sucesso!";
        } else {
            echo "Erro ao atualizar a senha.";
        }
    } else {
        echo "Token inválido ou expirado.";
    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha</title>
</head>

<body>
    <h1>Redefinir Senha</h1>
    <form method="POST">
        <input type="hidden" name="token" value="<?php echo $_GET['token'] ?? ''; ?>">
        <label for="nova_senha">Nova Senha:</label>
        <input type="password" id="nova_senha" name="nova_senha" required>
        <button type="submit">Redefinir Senha</button>
    </form>
</body>

</html>