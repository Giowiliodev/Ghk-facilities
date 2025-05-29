<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos foram preenchidos
    if (
        isset($_POST['nome']) &&
        isset($_POST['email']) &&
        isset($_POST['senha']) &&
        isset($_POST['confirmar_senha'])
    ) {
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $senha = $_POST['senha'];
        $confirmar = $_POST['confirmar_senha'];

        // Verifica se as senhas coincidem
        if ($senha !== $confirmar) {
            $erro = "As senhas não coincidem!";
        } else {
            // Redireciona para a página de sucesso
            header("Location: cadastro-ok.html");
            exit;
        }
    } else {
        $erro = "Por favor, preencha todos os campos.";
    }
}
?>