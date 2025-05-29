<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $servico = $_POST['servico'];
    $tipoLimpeza = $_POST['tipoLimpeza'] ?? '';
    $tipoManutencao = $_POST['tipoManutencao'] ?? '';
    $tipoPortaria = $_POST['tipoPortaria'] ?? '';
    $tipoBombeiro = $_POST['tipoBombeiro'] ?? '';
    $local = $_POST['local'];
    $descricao = $_POST['descricao'];

    // Validação de dados simples (pode adicionar mais validações)
    if (empty($email) || empty($servico) || empty($local) || empty($descricao)) {
        echo "Todos os campos são obrigatórios!";
        exit;
    }

    // Enviar e-mail ou armazenar no banco de dados
    // Exemplo de como você pode processar isso. (Por favor, configure seu servidor de e-mail corretamente)
    mail("seu-email@dominio.com", "Novo Pedido de Serviço", "Serviço: $servico\nTipo de Limpeza: $tipoLimpeza\nTipo de Manutenção: $tipoManutencao\nTipo de Portaria: $tipoPortaria\nTipo de Bombeiro: $tipoBombeiro\nLocal: $local\nDescrição: $descricao", "From: $email");

    echo "Serviço solicitado com sucesso!";
}
?>