<?php

$nome = addcslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$segmento = addcslashes($_POST['segmento']);

$to = "viniciuseduaro@outlook.com";
$subject = "Formulário - Preview 3T20";
$body = "Nome: ".$nome. "\n".
        "E-mail: ".$email. "\n".
        "Segmento: ".$segmento. "\n".

$header = "From: viniciusduu@hotmail.com"."\r\n"
            ."Reply-To: ".$email."\r\n"
            ."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("E-mail enviado com sucesso!");
}else{
    echo("E-mail não pode ser enviado!");
}




?>