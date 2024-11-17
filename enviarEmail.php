<?php
$mensagem = $_POST['mensagem'];
$assunto = $_POST['assunto'];
$nome = $_POST['nome'];

$para = "gabriellombardi70@gmail.com";
$objetivo = $assunto;
$body = "Nome".$nome. "\r\n" . 
        "Mensagem".$mensagem;

$headers = "From: eikymanoel09@gmail.com ". "\r\n". // o email do from de ser o email onde está rodando o script e "Reply-to:email" de responder
            "X=Mailer:PHP".phpversion();


if (mail($para, $objetivo, $body, $headers))
{
    echo "E-mail enviado com sucesso!";
}else{
    echo "E-mail não  pode ser enviado!";
}