<?php

$nome = htmlspecialchars($_POST['nome']);
$telefone = htmlspecialchars($_POST['telefone']);
$msg = htmlspecialchars($_POST['msg']);
#enviar as informações para o email
$to = "cleber.fidelles@gmail.com";
$subject = "Novo contato pelo site";
$message = "Nome: $nome
            Telefone: $telefone
            Mensagem : $msg";
$headers = "from : cleber.fidelles@gmail.com";

try{
    mail($to, $subject , $message , $headers);
    echo "obrigado, em breve entraremos em contato";
} catch(Exception $error){
   echo "Tente novamente mais tarde"; 
}
