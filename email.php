<?php
	$mensagem = $_REQUEST["mensagem"];
	$nome     = $_REQUEST["nome"];	
	$assunto  = $_REQUEST["assunto"];	
	$email    = $_REQUEST["email"];
	$to       = 'romuloazevedo@gmail.com';
	
	$headers   = 'MIME-Version: 1.0' . "\r\n";
	$headers  .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	$headers  .= 'From: '.$nome.' <'.$email.'> ' . "\r\n" .
				 'Reply-to: ' . $email . "\r\n".
				 'X-Mailer: PHP' . phpversion();

	$enviou = mail($to, $assunto, $mensagem, $headers);
	
	if($enviou==true){
		print "Enviou com sucesso! :)";
	}else{
		print "Não enviou :(";
	}
?>