<?php
//FORMULARIO - CONTATO
function enviarMensagem($dados){
    //dados dp formulario
   $nome_usuario = $dados["nome"];
   $email_usuario = $dados["email"];
   $assunto_usuario = $dados["assunto"];
   $mensagem_usuario = $dados["mensagem"];
    
    //criar variaveis de envio
    
    $destino = "contatosite@jediwebcorp.com.br";
    $remetente = "contatosite@jediwebcorp.com.br";
    $assunto = "mensagem do site - Contato";
//    $headers       = "From: $remetente\nContent-type: text/html;";
//    $headers      .= "Bcc: jhennysilva483@gmail.com";
    
    //montar o corpo do email
    
    $mensagem = "O usuario ". $nome_usuario ." enviou uma mensagem." . "\r\n" ;
    $mensagem .= "email do usuario: ". $email_usuario . "\r\n" ;
    $mensagem .= "assunto do usuario: ". $assunto_usuario . "\r\n" ;
    $mensagem .= "mensagem do usuario: ". $mensagem_usuario ;
    return mail($destino, $assunto, $mensagem, $remetente);
    
}

/*********************************************************************************************************/
//FORMULARIO - CONTATO
function enviarMensagemOrcamento($dados){
    //dados dp formulario
$nomeOrc = $dados['nomeOrc'];
$emailOrc = $dados['emailOrc'];
$telefoneOrc = $dados['telefoneOrc'];
$empresaOrc = $dados['empresaOrc'];
$cepOrc = $dados['cepOrc'];
$enderecoOrc = $dados['enderecoOrc'];
$cidadeOrc = $dados['cidadeOrc'];
$estadoOrc = $dados['estadoOrc'];
$numeroOrc = $dados['numeroOrc'];
$siteOrc = $dados['siteOrc'];
$urgenciaOrc = $dados['urgenciaOrc'];
$conheceuOrc = $dados['conheceuOrc'];

$mensagemOrc = $dados['mensagemOrc'];
$servico = $dados['servico'];

    
  
    
   
    
    //criar variaveis de envio
    
    $destino = "contatosite@jediwebcorp.com.br";
    $remetente = "contatosite@jediwebcorp.com.br";
    $assunto = "mensagem do site - Orçamento";
    
    //montar o corpo do email
    
    $mensagem = "usuario: ". $nomeOrc . "\r\n" ;
    $mensagem .= "Email: ". $emailOrc . "\r\n" ;
    $mensagem .= "Telefone: ". $telefoneOrc . "\r\n";
    $mensagem .= "Empresa: ". $empresaOrc . "\r\n";
    $mensagem .= "CEP: ". $cepOrc . "\r\n";
    $mensagem .= "Endereço: ". $enderecoOrc . "\r\n";
    $mensagem .= "Cidade: ". $cidadeOrc . "\r\n";
    $mensagem .= "Estado: ". $estadoOrc . "\r\n";
    $mensagem .= "Numero: ". $numeroOrc . "\r\n";
    $mensagem .= "Link do site: ". $siteOrc . "\r\n";
    $mensagem .= "Urgencia: ". $urgenciaOrc . "\r\n";
    $mensagem .= "Como nós conheceu: ". $conheceuOrc . "\r\n";
    $mensagem .= "Mensagem: ". $mensagemOrc . "\r\n";
    foreach($dados["servico"] as $numero)
    {
        $mensagem .= "Serviço: ". $numero  . "\r\n" ;
    }
    
    
    return mail($destino, $assunto, $mensagem, $remetente);
    
}

?>