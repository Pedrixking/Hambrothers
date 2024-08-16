<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Pegar os dados do pedido através do campo oculto
    $pedido = $_POST['pedido'];

    // Assunto do e-mail
    $subject = "Confirmação do Pedido - Hamburgueria";

    // Mensagem do e-mail com os detalhes do pedido
    $message = "Olá $nome,\n\nSeu pedido foi recebido!\n\nItens do pedido:\n$pedido\n\nObrigado pela preferência, meu hambrother!";

    // Cabeçalhos de e-mail
    $headers = "From: hamburgueria@exemplo.com";

    // Enviar e-mail
    if(mail($email, $subject, $message, $headers)) {
        echo "Pedido enviado com sucesso!";
    } else {
        echo "Erro ao enviar o pedido.";
    }
}
?>
