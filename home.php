<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Define a codificação de caracteres -->
    <meta charset="UTF-8">
    <!-- Define a largura da tela para dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título da página -->
    <title>Lista de Compras</title>
    <!-- Link para o arquivo CSS externo -->
    <link rel="stylesheet" href="assets/css/home.css">
    <!-- Link para o Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <!-- Cabeçalho da página -->
    <header>
        <!-- Título principal da aplicação -->
        <h1>Lista de Compras</h1>
    </header>

    <!-- Seção principal da aplicação -->
    <main>
        <!-- Formulário para adicionar itens à lista -->
        <h2>Adicionar Item</h2>
        <form id="item-form">
            <!-- Campo para o nome do item -->
            <input type="text" id="item-name" placeholder="Nome do item" required>
            <!-- Campo para a quantidade do item -->
            <input type="number" id="item-quantity" placeholder="Quantidade" required>
            <!-- Campo para o preço do item -->
            <input type="number" id="item-price" placeholder="Preço unitário" step="0.01" required>
            <!-- Botão para adicionar o item -->
            <button type="submit">Adicionar</button>
        </form>

        <!-- Lista de itens pendentes -->
        <h2>Itens Pendentes</h2>
        <ul id="pending-items"></ul>

        <!-- Lista de itens comprados -->
        <h2>Itens Comprados</h2>
        <ul id="bought-items"></ul>

        <!-- Contêiner para o valor total e o botão de sair -->
        <div class="total-container">
            <!-- Ícone de sair -->
            <div class="logout-icon">
                <a href="logout.php">
                    <span class="material-icons">logout</span>
                </a>
            </div>

            <!-- Campo para exibir o valor total -->
            <input type="text" id="total-value" value="R$ 0,00" readonly>
        </div>
    </main>

    <!-- Modal de confirmação para edição -->
    <div id="edit-modal" class="modal hidden">
        <div class="modal-content">
            <!-- Mensagem de confirmação -->
            <p>Tem certeza de que deseja editar este item?</p>
            <!-- Botão para confirmar a edição -->
            <button id="confirm-edit">Sim</button>
            <!-- Botão para cancelar a edição -->
            <button id="cancel-edit">Não</button>
        </div>
    </div>  

    <!-- Importação do arquivo JavaScript externo -->
    <script src="assets/js/script.js"></script>
</body>

</html>