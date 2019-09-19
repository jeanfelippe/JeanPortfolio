<?php

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $assunto = "Fale conosco site - ".$_POST["assunto"];      
    $para = "jeanfelippe23@gmail.com";
             
    $mensagem = 
            
            "Nome do cliente: ".$nome. "<br>".
            "E-mail do cliente: ".$email. "<br>".
            "Mensagem: <br>". nl2br($_POST["mensagem"]);
      
    
    //Padrão do envio e-mail
    $header = "Mime-version:1.0\n";
    $header = $header. "Content-type:text/html;utf-8 \n";
    $header = $header. "From: Meu Site <jeanfelippe23@gmail.com.br> \n";
    //$header = $header. "Cc: Meu Site <contato@meusite.com.br>";
    //$header = $header. "Bcc: Meu Site <contato@meusite.com.br>";
    $header = $header. "Reply-to: ".$email. "\n";
    
    
    if(mail($para,$assunto,$mensagem,$header)){
        echo "E-mail enviado com sucesso!";          
        
        $resposta = "Olá,".$nome. "<br>Seu E-mail foi recebido com sucesso!";
        
        mail($email, "Contato recebido", $resposta,$header);
        
        
    }else{
        echo "Erro ao enviar o e-mail";
    }
    

?>