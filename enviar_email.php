<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $descricao = $_POST['descricao'];

    $to = "seuemail@gmail.com";
    $subject = "Novo Contato do Site";
    $message = "Nome: $nome\nEmail: $email\nTelefone: $telefone\nDescrição: $descricao";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Falha no envio do e-mail.";
    }
}
?>
